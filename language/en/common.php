<?php
/**
*
* @package phpBB Extension - tas2580 Content Security Policy
* @copyright (c) 2014 tas2580
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CONTENT_SECURETY_TITLE'			=> 'Content Security Policy',
	'ACP_CONTENT_SECURETY_EXPLAIN'		=> 'Through content security policy you can tell the browser where it may involve certain resources. So you can, for example, Embed the JavaScripts gennerel prohibit or allow only certain domains. For further information see <a href="https://en.wikipedia.org/wiki/Content_Security_Policy">Wikipedia</a>.<br /><b>Note that incorrect settings can make your forum unusable!</b>',
	'ACP_CSP_SAVED'						=> 'The settings have been changed',

	'ACP_STYLE_POLICY'						=> 'Style settings',
	'ACP_STYLE_SELF'						=> 'Own Domain',
	'ACP_STYLE_SELF_EXPLAIN'				=> 'Allow stylesheets from your own domain.',
	'ACP_STYLE_INLINE'						=> 'Inline Style',
	'ACP_STYLE_INLINE_EXPLAIN'				=> 'Allow styles directly in HTML tags (style="...").',
	'ACP_STYLE_NONE'						=> 'Prohibit style',
	'ACP_STYLE_NONE_EXPLAIN'				=> 'Styles generally forbid (not recommended)',
	'ACP_STYLE_URL'						=> 'Approved URLs',
	'ACP_STYLE_URL_EXPLAIN'				=> 'Give URLs (one per line) a of which are stylesheets allowed. With * all URLs may be allowed.',

	'ACP_SCRIPT_POLICY'					=> 'Script settings',
	'ACP_SCRIPT_SELF'						=> 'Own Domain',
	'ACP_SCRIPT_SELF_EXPLAIN'				=> 'Allow JavaScript from your own domain.',
	'ACP_SCRIPT_INLINE'						=> 'Inline Script',
	'ACP_SCRIPT_INLINE_EXPLAIN'				=> 'Allow JavaScript directly in HTML tags (onclick="...").',
	'ACP_SCRIPT_EVAL'						=> 'JavaScript eval',
	'ACP_SCRIPT_EVAL_EXPLAIN'				=> 'Allow JavaScript eval.',
	'ACP_SCRIPT_NONE'						=> 'Prohibit JavaScript',
	'ACP_SCRIPT_NONE_EXPLAIN'				=> 'JavaScript generally forbid (not recommended)',
	'ACP_SCRIPT_URL'						=> 'Approved URLs',
	'ACP_SCRIPT_URL_EXPLAIN'				=> 'Give URLs (one per line) a of which are JavaScript allowed. With * all URLs may be allowed.',

	'ACP_IMG_POLICY'						=> 'Image settings',
	'ACP_IMG_SELF'							=> 'Own Domain',
	'ACP_IMG_SELF_EXPLAIN'					=> 'Allow images from your own domain.',
	'ACP_IMG_NONE'						=> 'Prohibit images',
	'ACP_IMG_NONE_EXPLAIN'					=> 'Images generally forbid (not recommended)',
	'ACP_IMG_DATA'						=> 'Inline images',
	'ACP_IMG_DATA_EXPLAIN'					=> 'Prohibit inline Base64 images.',
	'ACP_IMG_URL'							=> 'Approved URLs',
	'ACP_IMG_URL_EXPLAIN'					=> 'Give URLs (one per line) a of which are images allowed. With * all URLs may be allowed.',

	'ACP_OBJECT_POLICY'					=> 'Object settings',
	'ACP_OBJECT_SELF'						=> 'Own Domain',
	'ACP_OBJECT_SELF_EXPLAIN'				=> 'Allow objects from your own domain.',
	'ACP_OBJECT_NONE'						=> 'Prohibit objects',
	'ACP_OBJECT_NONE_EXPLAIN'				=> 'Objects generally forbid (not recommended)',
	'ACP_OBJECT_URL'						=> 'Approved URLs',
	'ACP_OBJECT_URL_EXPLAIN'				=> 'Give URLs (one per line) a of which are objects allowed. With * all URLs may be allowed.',

	'ACP_MEDIA_POLICY'						=> 'Media settings',
	'ACP_MEDIA_SELF'						=> 'Own Domain',
	'ACP_MEDIA_SELF_EXPLAIN'				=> 'Allow media from your own domain.',
	'ACP_MEDIA_NONE'						=> 'Prohibit media',
	'ACP_MEDIA_NONE_EXPLAIN'				=> 'Media generally forbid (not recommended)',
	'ACP_MEDIA_URL'						=> 'Approved URLs',
	'ACP_MEDIA_URL_EXPLAIN'				=> 'Give URLs (one per line) a of which are media allowed. With * all URLs may be allowed.',

	'ACP_FRAME_POLICY'					=> 'Frame settings',
	'ACP_FRAME_SELF'						=> 'Own Domain',
	'ACP_FRAME_SELF_EXPLAIN'				=> 'Allow frames from your own domain.',
	'ACP_FRAME_NONE'						=> 'Prohibit frames',
	'ACP_FRAME_NONE_EXPLAIN'				=> 'Frames generally forbid (not recommended)n',
	'ACP_FRAME_URL'						=> 'Approved URLs',
	'ACP_FRAME_URL_EXPLAIN'				=> 'Give URLs (one per line) a of which are frames allowed. With * all URLs may be allowed.',

	'ACP_FONT_POLICY'						=> 'Fonts settings',
	'ACP_FONT_SELF'						=> 'Own Domain',
	'ACP_FONT_SELF_EXPLAIN'				=> 'Allow fonts from your own domain.',
	'ACP_FONT_NONE'						=> 'Prohibit fonts',
	'ACP_FONT_NONE_EXPLAIN'				=> 'Fonts generally forbid (not recommended)',
	'ACP_FONT_URL'						=> 'Approved URLs',
	'ACP_FONT_URL_EXPLAIN'					=> 'Give URLs (one per line) a of which are fonts allowed. With * all URLs may be allowed.',

	'ACP_DEFAULT_POLICY'					=> 'Default settings',
	'ACP_DEFAULT_SELF'					=> 'Own Domain',
	'ACP_DEFAULT_SELF_EXPLAIN'				=> 'Allow recorces from your own domain.',
	'ACP_DEFAULT_NONE'					=> 'Prohibit all',
	'ACP_DEFAULT_NONE_EXPLAIN'				=> 'All generally forbid (not recommended).',
	'ACP_DEFAULT_URL'						=> 'Approved URLs',
	'ACP_DEFAULT_URL_EXPLAIN'				=> 'Give URLs (one per line) a of which are recorces allowed. With * all URLs may be allowed.',

));
