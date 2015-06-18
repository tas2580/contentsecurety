<?php
/**
*
* @package phpBB Extension - tas2580 Content Security Policy
* @copyright (c) 2014 tas2580
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\contentsecurety\acp;

class contentsecurety_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $user, $template, $request;

		$this->tpl_name = 'acp_contentsecurety_body';
		$this->page_title = $user->lang('ACP_CONTENT_SECURETY_TITLE');

		add_form_key('acp_contentsecurety');

		// Form is submitted
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_contentsecurety'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Set the new settings to config
			$config->set('tas2580_csp_style_self', $request->variable('style_self', 0));
			$config->set('tas2580_csp_style_inline', $request->variable('style_inline', 0));
			$config->set('tas2580_csp_style_none', $request->variable('style_none', 0));
			$config->set('tas2580_csp_style_url', $request->variable('style_url', '', true));

			$config->set('tas2580_csp_script_self', $request->variable('script_self', 0));
			$config->set('tas2580_csp_script_inline', $request->variable('script_inline', 0));
			$config->set('tas2580_csp_script_eval', $request->variable('script_eval', 0));
			$config->set('tas2580_csp_script_none', $request->variable('script_none', 0));
			$config->set('tas2580_csp_script_url', $request->variable('script_url', '', true));

			$config->set('tas2580_csp_object_self', $request->variable('object_self', 0));
			$config->set('tas2580_csp_object_none', $request->variable('object_none', 0));
			$config->set('tas2580_csp_object_url', $request->variable('object_url', '', true));

			$config->set('tas2580_csp_media_self', $request->variable('media_self', 0));
			$config->set('tas2580_csp_media_none', $request->variable('media_none', 0));
			$config->set('tas2580_csp_media_url', $request->variable('media_url', '', true));

			$config->set('tas2580_csp_frame_self', $request->variable('frame_self', 0));
			$config->set('tas2580_csp_frame_none', $request->variable('frame_none', 0));
			$config->set('tas2580_csp_frame_url', $request->variable('frame_url', '', true));

			$config->set('tas2580_csp_font_self', $request->variable('font_self', 0));
			$config->set('tas2580_csp_font_none', $request->variable('font_none', 0));
			$config->set('tas2580_csp_font_url', $request->variable('font_url', '', true));

			$config->set('tas2580_csp_img_self', $request->variable('img_self', 0));
			$config->set('tas2580_csp_img_data', $request->variable('img_data', 0));
			$config->set('tas2580_csp_img_none', $request->variable('img_none', 0));
			$config->set('tas2580_csp_img_url', $request->variable('img_url', '', true));

			$config->set('tas2580_csp_default_self', $request->variable('default_self', 0));
			$config->set('tas2580_csp_default_none', $request->variable('default_none', 0));
			$config->set('tas2580_csp_default_url', $request->variable('default_url', '', true));

			trigger_error($user->lang('ACP_CSP_SAVED') . adm_back_link($this->u_action));
		}

		// Send the curent settings to template
		$template->assign_vars(array(
			'U_ACTION'			=> $this->u_action,
			'STYLE_SELF'			=> ($config['tas2580_csp_style_self'] == 1) ? ' checked="checked"' : '',
			'STYLE_INLINE'			=> ($config['tas2580_csp_style_inline'] == 1) ? ' checked="checked"' : '',
			'STYLE_NONE'			=> ($config['tas2580_csp_style_none'] == 1) ? ' checked="checked"' : '',
			'STYLE_URL'			=> $config['tas2580_csp_style_url'],

			'SCRIPT_SELF'			=> ($config['tas2580_csp_script_self'] == 1) ? ' checked="checked"' : '',
			'SCRIPT_INLINE'			=> ($config['tas2580_csp_script_inline'] == 1) ? ' checked="checked"' : '',
			'SCRIPT_EVAL'			=> ($config['tas2580_csp_script_eval'] == 1) ? ' checked="checked"' : '',
			'SCRIPT_NONE'			=> ($config['tas2580_csp_script_none'] == 1) ? ' checked="checked"' : '',
			'SCRIPT_URL'			=> $config['tas2580_csp_script_url'],

			'OBJECT_SELF'			=> ($config['tas2580_csp_object_self'] == 1) ? ' checked="checked"' : '',
			'OBJECT_NONE'			=> ($config['tas2580_csp_object_none'] == 1) ? ' checked="checked"' : '',
			'OBJECT_URL'			=> $config['tas2580_csp_object_url'],

			'MEDIA_SELF'			=> ($config['tas2580_csp_media_self'] == 1) ? ' checked="checked"' : '',
			'MEDIA_NONE'			=> ($config['tas2580_csp_media_none'] == 1) ? ' checked="checked"' : '',
			'MEDIA_URL'			=> $config['tas2580_csp_media_url'],

			'FRAME_SELF'			=> ($config['tas2580_csp_frame_self'] == 1) ? ' checked="checked"' : '',
			'FRAME_NONE'			=> ($config['tas2580_csp_frame_none'] == 1) ? ' checked="checked"' : '',
			'FRAME_URL'			=> $config['tas2580_csp_frame_url'],

			'FONT_SELF'			=> ($config['tas2580_csp_font_self'] == 1) ? ' checked="checked"' : '',
			'FONT_NONE'			=> ($config['tas2580_csp_font_none'] == 1) ? ' checked="checked"' : '',
			'FONT_URL'			=> $config['tas2580_csp_font_url'],

			'IMG_SELF'			=> ($config['tas2580_csp_img_self'] == 1) ? ' checked="checked"' : '',
			'IMG_NONE'			=> ($config['tas2580_csp_img_none'] == 1) ? ' checked="checked"' : '',
			'IMG_DATA'			=> ($config['tas2580_csp_img_data'] == 1) ? ' checked="checked"' : '',
			'IMG_URL'				=> $config['tas2580_csp_img_url'],

			'DEFAULT_SELF'		=> ($config['tas2580_csp_default_self'] == 1) ? ' checked="checked"' : '',
			'DEFAULT_NONE'		=> ($config['tas2580_csp_default_none'] == 1) ? ' checked="checked"' : '',
			'DEFAULT_URL'			=> $config['tas2580_csp_default_url'],
		));
	}
}
