<?php
/**
*
* @package phpBB Extension - tas2580 Content Security Policy
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\contentsecurety\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/**
	* Constructor
	*
	* @param \phpbb\config\config $config
	* @access public
	*/
	public function __construct(\phpbb\config\config $config)
	{
		$this->config = $config;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.common'		=> 'output_header',
			'core.user_setup'	=> 'load_language_on_setup',
		);
	}

	/**
	* Output CSP header
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function output_header($event)
	{
		$types = array('style', 'script', 'object', 'media', 'frame', 'font', 'img', 'default');

		foreach ($types as $type)
		{
			$src[$type] = '';
			if ($this->config['tas2580_csp_' . $type . '_self'])
			{
				$src[$type] .= " 'self'";
			}
			if (isset($this->config['tas2580_csp_' . $type . '_inline']) && $this->config['tas2580_csp_' . $type . '_inline'])
			{
				$src[$type] .= " 'unsafe-inline'";
			}
			if (isset($this->config['tas2580_csp_' . $type . '_eval']) && $this->config['tas2580_csp_' . $type . '_eval'])
			{
				$src[$type] .= " 'unsafe-eval'";
			}
			if ($this->config['tas2580_csp_' . $type . '_url'])
			{
				$urls = preg_split("#\n#", $this->config['tas2580_csp_' . $type . '_url']);
				foreach ($urls as $url)
				{
					$src[$type] .= ' ' . $url;
				}
			}
			if (isset($this->config['tas2580_csp_' . $type . '_data']) && $this->config['tas2580_csp_' . $type . '_data'])
			{
				$src[$type] .= ' data:';
			}
			if ($this->config['tas2580_csp_' . $type . '_none'])
			{
				$src[$type] = " 'none'";
			}
			$src[$type] = empty($src[$type]) ? '' : $type . '-src' . $src[$type] . ';';
		}

		header("Content-Security-Policy:{$src['style']} {$src['script']} {$src['object']} {$src['media']} {$src['frame']} {$src['font']} {$src['img']} {$src['default']}");
		header("X-Content-Security-Policy:{$src['style']} {$src['script']} {$src['object']} {$src['media']} {$src['frame']} {$src['font']} {$src['img']} {$src['default']}");
		header("X-WebKit-CSP:{$src['style']} {$src['script']} {$src['object']} {$src['media']} {$src['frame']} {$src['font']} {$src['img']} {$src['default']}");

	//	global $phpbb_root_path;
	//	$report_uri = generate_board_url() . '/ext/tas2580/contentsecurety/report.php';
	//	header("Content-Security-Policy-Report-Only: default-src 'none'; report-uri {$report_uri}");
	}


	/**
	* Add custom language variables
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'	=> 'tas2580/contentsecurety',
			'lang_set'		=> 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
