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
	'ACP_CONTENT_SECURETY_TITLE'	=> 'Content Security Policy',
	'ACP_CONTENT_SECURETY_EXPLAIN'	=> 'Durch Content Security Policy kannst du dem Browser sagen von wo er bestimmte Ressourcen einbinden darf. So kannst du z.B. das einbinden von JavaScripts generell verbieten oder nur von bestimmten Domains zulassen. Für weitere Informationen siehe <a href="https://de.wikipedia.org/wiki/Content_Security_Policy">Wikipedia</a>.<br /><b>Beachte das falsche Einstellungen dein Forum unbrauchbar machen können!</b>',
	'ACP_CSP_SAVED'					=> 'Die Einstellungen wurden geändert',

	'ACP_STYLE_POLICY'				=> 'Style Einstellungen',
	'ACP_STYLE_SELF'				=> 'Eigene Domain',
	'ACP_STYLE_SELF_EXPLAIN'		=> 'Stylesheets von der eigenen Domain zulassen.',
	'ACP_STYLE_INLINE'				=> 'Inline Style',
	'ACP_STYLE_INLINE_EXPLAIN'		=> 'Styles direkt in HTML Tags zulassen (style="...").',
	'ACP_STYLE_NONE'				=> 'Styles verbieten',
	'ACP_STYLE_NONE_EXPLAIN'		=> 'Styles generell verbieten (nicht empfohlen)',
	'ACP_STYLE_URL'					=> 'Zugelassene URLs',
	'ACP_STYLE_URL_EXPLAIN'			=> 'Gib URLs (pro Zeile eine) ein von denen Stylesheets erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_SCRIPT_POLICY'				=> 'Script Einstellungen',
	'ACP_SCRIPT_SELF'				=> 'Eigene Domain',
	'ACP_SCRIPT_SELF_EXPLAIN'		=> 'JavaScript von der eigenen Domain zulassen.',
	'ACP_SCRIPT_INLINE'				=> 'Inline Script',
	'ACP_SCRIPT_INLINE_EXPLAIN'		=> 'JavaScript direkt in HTML Tags zulassen (onclick="...").',
	'ACP_SCRIPT_EVAL'				=> 'JavaScript eval',
	'ACP_SCRIPT_EVAL_EXPLAIN'		=> 'JavaScript eval zulassen.',
	'ACP_SCRIPT_NONE'				=> 'JavaScript verbieten',
	'ACP_SCRIPT_NONE_EXPLAIN'		=> 'JavaScript generell verbieten (nicht empfohlen)',
	'ACP_SCRIPT_URL'				=> 'Zugelassene URLs',
	'ACP_SCRIPT_URL_EXPLAIN'		=> 'Gib URLs (pro Zeile eine) ein von denen JavaScript erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_IMG_POLICY'				=> 'Bild Einstellungen',
	'ACP_IMG_SELF'					=> 'Eigene Domain',
	'ACP_IMG_SELF_EXPLAIN'			=> 'Bilder von der eigenen Domain zulassen.',
	'ACP_IMG_NONE'					=> 'Bilder verbieten',
	'ACP_IMG_NONE_EXPLAIN'			=> 'Bilder generell verbieten (nicht empfohlen)',
	'ACP_IMG_DATA'					=> 'Inline Bilder',
	'ACP_IMG_DATA_EXPLAIN'			=> 'Inline Base64 Bilder verbieten.',
	'ACP_IMG_URL'					=> 'Zugelassene URLs',
	'ACP_IMG_URL_EXPLAIN'			=> 'Gib URLs (pro Zeile eine) ein von denen Bilder erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_OBJECT_POLICY'				=> 'Object Einstellungen',
	'ACP_OBJECT_SELF'				=> 'Eigene Domain',
	'ACP_OBJECT_SELF_EXPLAIN'		=> 'Objecte von der eigenen Domain zulassen.',
	'ACP_OBJECT_NONE'				=> 'Objecte verbieten',
	'ACP_OBJECT_NONE_EXPLAIN'		=> 'Objecte generell verbieten',
	'ACP_OBJECT_URL'				=> 'Zugelassene URLs',
	'ACP_OBJECT_URL_EXPLAIN'		=> 'Gib URLs (pro Zeile eine) ein von denen Objecte erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_MEDIA_POLICY'				=> 'Medien Einstellungen',
	'ACP_MEDIA_SELF'				=> 'Eigene Domain',
	'ACP_MEDIA_SELF_EXPLAIN'		=> 'Medien von der eigenen Domain zulassen.',
	'ACP_MEDIA_NONE'				=> 'Medien verbieten',
	'ACP_MEDIA_NONE_EXPLAIN'		=> 'Medien generell verbieten',
	'ACP_MEDIA_URL'					=> 'Zugelassene URLs',
	'ACP_MEDIA_URL_EXPLAIN'			=> 'Gib URLs (pro Zeile eine) ein von denen Medien erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_FRAME_POLICY'				=> 'Frame Einstellungen',
	'ACP_FRAME_SELF'				=> 'Eigene Domain',
	'ACP_FRAME_SELF_EXPLAIN'		=> 'Frames von der eigenen Domain zulassen.',
	'ACP_FRAME_NONE'				=> 'Frames verbieten',
	'ACP_FRAME_NONE_EXPLAIN'		=> 'Frames generell verbieten',
	'ACP_FRAME_URL'					=> 'Zugelassene URLs',
	'ACP_FRAME_URL_EXPLAIN'			=> 'Gib URLs (pro Zeile eine) ein von denen Frames erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_FONT_POLICY'				=> 'Schriftarten Einstellungen',
	'ACP_FONT_SELF'					=> 'Eigene Domain',
	'ACP_FONT_SELF_EXPLAIN'			=> 'Schriftarten von der eigenen Domain zulassen.',
	'ACP_FONT_NONE'					=> 'Schriftarten verbieten',
	'ACP_FONT_NONE_EXPLAIN'			=> 'Schriftarten generell verbieten',
	'ACP_FONT_URL'					=> 'Zugelassene URLs',
	'ACP_FONT_URL_EXPLAIN'			=> 'Gib URLs (pro Zeile eine) ein von denen Schriftarten erlaubt sind. Mit * können alle URLs zugelassen werden.', 

	'ACP_DEFAULT_POLICY'			=> 'Standard Einstellungen',
	'ACP_DEFAULT_SELF'				=> 'Eigene Domain',
	'ACP_DEFAULT_SELF_EXPLAIN'		=> 'Recorcen Standardmäsig von der eigenen Domain zulassen.',
	'ACP_DEFAULT_NONE'				=> 'Alles verbieten',
	'ACP_DEFAULT_NONE_EXPLAIN'		=> 'Alles generell verbieten (nicht Empfohlen).',
	'ACP_DEFAULT_URL'				=> 'Zugelassene URLs',
	'ACP_DEFAULT_URL_EXPLAIN'		=> 'Gib URLs (pro Zeile eine) ein von denen Ressourcen Standardmäsig erlaubt sind. Mit * können alle URLs zugelassen werden.', 

));
