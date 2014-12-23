<?php
/**
*
* @package phpBB Extension - tas2580 Content Security Policy
* @copyright (c) 2014 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\contentsecurety\migrations;

class release_0_1_0_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['contentsecurety_version']) && version_compare($this->config['contentsecurety_version'], '0.1.0', '>=');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('tas2580_csp_style_self', '1')),
			array('config.add', array('tas2580_csp_style_inline', '1')),
			array('config.add', array('tas2580_csp_style_none', '0')),
			array('config.add', array('tas2580_csp_style_url', '')),

			array('config.add', array('tas2580_csp_script_self', '1')),
			array('config.add', array('tas2580_csp_script_inline', '1')),
			array('config.add', array('tas2580_csp_script_eval', '1')),
			array('config.add', array('tas2580_csp_script_none', '0')),
			array('config.add', array('tas2580_csp_script_url', '')),

			array('config.add', array('tas2580_csp_object_self', '1')),
			array('config.add', array('tas2580_csp_object_none', '0')),
			array('config.add', array('tas2580_csp_object_url', '')),

			array('config.add', array('tas2580_csp_media_self', '1')),
			array('config.add', array('tas2580_csp_media_none', '0')),
			array('config.add', array('tas2580_csp_media_url', '')),

			array('config.add', array('tas2580_csp_frame_self', '1')),
			array('config.add', array('tas2580_csp_frame_none', '0')),
			array('config.add', array('tas2580_csp_frame_url', '')),

			array('config.add', array('tas2580_csp_font_self', '1')),
			array('config.add', array('tas2580_csp_font_none', '0')),
			array('config.add', array('tas2580_csp_font_url', '')),

			array('config.add', array('tas2580_csp_img_self', '1')),
			array('config.add', array('tas2580_csp_img_none', '0')),
			array('config.add', array('tas2580_csp_img_data', '0')),
			array('config.add', array('tas2580_csp_img_url', 'secure.gravatar.com')),

			array('config.add', array('tas2580_csp_default_self', '1')),
			array('config.add', array('tas2580_csp_default_none', '0')),
			array('config.add', array('tas2580_csp_default_url', '')),


			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_CONTENT_SECURETY_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_CONTENT_SECURETY_TITLE',
				array(
					'module_basename'	=> '\tas2580\contentsecurety\acp\contentsecurety_module',
					'modes'				=> array('settings'),
				),
			)),

			// Keep track of version in the database
			array('config.add', array('contentsecurety_version', '0.1.0')),
		);
	}
}
