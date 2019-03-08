<?php
/**
*
* @package phpBB Extension - Badge
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Spanish translation by iorG19 (https://www.palabradeiorg.es)
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
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'BBCODE_BADGE_HELP'			=> '[badge]ASUNTO-VERSIÓN-COLOR[/badge]',
		'BADGE_BBCODES'				=> 'Insignia bbCode',
		'CHANGELOG'					=> 'registro-v1.0.0-900080',
		'CHANGELOG_TITLE'			=> 'Registro de cambios',
		'CUSTOM'					=> 'ASUNTO-VERSIÓN-COLOR',
		'CUSTOM_TITLE'				=> 'Personalizado',
		'LICENSE'					=> 'licencia-GPLv2-blue',
		'LICENSE_TITLE'				=> 'Licencia GPLv2',
		'VERSION'					=> 'versión-1.0.0-FE7D37',
		'VERSION_TITLE'				=> 'Versión 1.0.0',
		'VERSION_101'				=> 'versión-1.0.1-FE7D37',
		'VERSION_101_TITLE'			=> 'Versión 1.0.1',
		'VERSION_102'				=> 'version-1.0.2-FE7D37',
		'VERSION_102_TITLE'			=> 'Versión 1.0.2',
		'VERSION_103'				=> 'versión-1.0.3-FE7D37',
		'VERSION_103_TITLE'			=> 'Versión 1.0.3',
		'VERSION_104'				=> 'versión-1.0.4-FE7D37',
		'VERSION_104_TITLE'			=> 'Versión 1.0.4',
		'VERSION_105'				=> 'versión-1.0.5-FE7D37',
		'VERSION_105_TITLE'			=> 'Versión 1.0.5',
		'VERSION_106'				=> 'versión-1.0.6-FE7D37',
		'VERSION_106_TITLE'			=> 'Versión 1.0.6',
	)
);
