<?php
/**
*
* Content Security Policy extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 tas2580
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_CONTENT_SECURETY_TITLE'			=> 'Politique de sécurité du contenu',
	'ACP_CONTENT_SECURETY_EXPLAIN'		=> 'Au moyen de la politique de sécurité du contenu, il est possible d’indiquer au navigateur quelles ressources solliciter. Ainsi il est possible par exemple, d’interdire de manière globale le langage JavaScript ou d’autoriser uniquement certains noms de domaine. Pour davantage d’informations, consulter le site Web : <a href="https://fr.wikipedia.org/wiki/Content_Security_Policy">Wikipedia</a>.<br /><b>Merci de noter que des paramètres incorrects peuvent rendre votre forum inutilisable !</b>',
	'ACP_CSP_SAVED'						=> 'Les paramètres ont été modifiés.',

	'ACP_STYLE_POLICY'						=> 'Paramètres du style',
	'ACP_STYLE_SELF'						=> 'Depuis son propre nom de domaine',
	'ACP_STYLE_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement les feuilles de styles depuis son propre nom de domaine.',
	'ACP_STYLE_INLINE'						=> 'Balise « style » dans la ligne',
	'ACP_STYLE_INLINE_EXPLAIN'				=> 'Permet d’utiliser directement les balises HTML (style ="…").',
	'ACP_STYLE_NONE'						=> 'Interdire le style',
	'ACP_STYLE_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale les styles (non recommandé).',
	'ACP_STYLE_URL'						=> 'Adresses URL autorisées',
	'ACP_STYLE_URL_EXPLAIN'				=> 'Permet d’autoriser des feuilles de styles depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_SCRIPT_POLICY'					=> 'Paramètres des scripts',
	'ACP_SCRIPT_SELF'						=> 'Depuis son propre nom de domaine',
	'ACP_SCRIPT_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement le langage Javascript depuis son propre nom de domaine.',
	'ACP_SCRIPT_INLINE'						=> 'Balise « onclick » dans la ligne',
	'ACP_SCRIPT_INLINE_EXPLAIN'				=> 'Permet d’utiliser directement les balises HTML (onclick="…").',
	'ACP_SCRIPT_EVAL'						=> 'Fonction JavaScript eval()',
	'ACP_SCRIPT_EVAL_EXPLAIN'				=> 'Permet d’utiliser la fonction eval() du langage JavaScript.',
	'ACP_SCRIPT_NONE'						=> 'Interdire JavaScript',
	'ACP_SCRIPT_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale le langage JavaScript (non recommandé).',
	'ACP_SCRIPT_URL'						=> 'Adresses URL autorisées',
	'ACP_SCRIPT_URL_EXPLAIN'				=> 'Permet d’autoriser le langage JavaScript depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_IMG_POLICY'						=> 'Paramètres des images',
	'ACP_IMG_SELF'							=> 'Depuis son propre nom de domaine',
	'ACP_IMG_SELF_EXPLAIN'					=> 'Permet d’utiliser uniquement les images depuis son propre nom de domaine.',
	'ACP_IMG_NONE'						=> 'Interdire les images',
	'ACP_IMG_NONE_EXPLAIN'					=> 'Permet d’interdire de manière globale les images (non recommandé).',
	'ACP_IMG_DATA'						=> 'Images dans la ligne',
	'ACP_IMG_DATA_EXPLAIN'					=> 'Permet d’interdire les images BASE64.',
	'ACP_IMG_URL'							=> 'Adresses URL autorisées',
	'ACP_IMG_URL_EXPLAIN'					=> 'Permet d’autoriser les images depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_OBJECT_POLICY'					=> 'Paramètres des objets',
	'ACP_OBJECT_SELF'						=> 'Depuis son propre nom de domaine',
	'ACP_OBJECT_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement les objets depuis son propre nom de domaine.',
	'ACP_OBJECT_NONE'						=> 'Interdire les objets',
	'ACP_OBJECT_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale les objets (non recommandé).',
	'ACP_OBJECT_URL'						=> 'Adresses URL autorisées',
	'ACP_OBJECT_URL_EXPLAIN'				=> 'Permet d’autoriser les objets depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_MEDIA_POLICY'						=> 'Paramètres des médias',
	'ACP_MEDIA_SELF'						=> 'Depuis son propre nom de domaine',
	'ACP_MEDIA_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement les médias depuis son propre nom de domaine.',
	'ACP_MEDIA_NONE'						=> 'Interdire les médias',
	'ACP_MEDIA_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale les médias (non recommandé).',
	'ACP_MEDIA_URL'						=> 'Adresses URL autorisées',
	'ACP_MEDIA_URL_EXPLAIN'				=> 'Permet d’autoriser les médias depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_FRAME_POLICY'					=> 'Paramètres des frames',
	'ACP_FRAME_SELF'						=> 'Depuis son propre nom de domaine',
	'ACP_FRAME_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement les frames depuis son propre nom de domaine.',
	'ACP_FRAME_NONE'						=> 'Interdire les frames',
	'ACP_FRAME_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale les frames (non recommandé).',
	'ACP_FRAME_URL'						=> 'Adresses URL autorisées',
	'ACP_FRAME_URL_EXPLAIN'				=> 'Permet d’autoriser les frames depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_FONT_POLICY'						=> 'Paramètres des polices de caractères',
	'ACP_FONT_SELF'						=> 'Depuis son propre nom de domaine',
	'ACP_FONT_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement les polices de caractères depuis son propre nom de domaine.',
	'ACP_FONT_NONE'						=> 'Interdire les polices de caractères',
	'ACP_FONT_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale les polices de caractères (non recommandé).',
	'ACP_FONT_URL'						=> 'Adresses URL autorisées',
	'ACP_FONT_URL_EXPLAIN'					=> 'Permet d’autoriser les polices de caractères depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

	'ACP_DEFAULT_POLICY'					=> 'Paramètres par défaut',
	'ACP_DEFAULT_SELF'					=> 'Depuis son propre nom de domaine',
	'ACP_DEFAULT_SELF_EXPLAIN'				=> 'Permet d’utiliser uniquement les ressources depuis son propre nom de domaine.',
	'ACP_DEFAULT_NONE'					=> 'Tout interdire',
	'ACP_DEFAULT_NONE_EXPLAIN'				=> 'Permet d’interdire de manière globale les ressources (non recommandé).',
	'ACP_DEFAULT_URL'						=> 'Adresses URL autorisées',
	'ACP_DEFAULT_URL_EXPLAIN'				=> 'Permet d’autoriser les ressources depuis les adresses URL indiquées (une par ligne). Avec le caractère « * » toutes les adresses URL sont autorisées.',

));
