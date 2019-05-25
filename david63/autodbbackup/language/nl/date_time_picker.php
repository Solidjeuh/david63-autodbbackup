<?php
/**
*
* @package Auto db Backup (3.2)
* @copyright (c) 2015 david63
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLOSE_TEXT'			=> 'Klaar',
	'CURRENT_TEXT_DATE'		=> 'Vandaag',
	'CURRENT_TEXT_TIME'		=> 'Nu',
	'HOUR_TEXT'				=> 'Uur',
	'MINUTE_TEXT'			=> 'Minuut',
	'NEXT_TEXT'				=> 'Volgende>',
	'PREV_TEXT'				=> '<Vorige',
	'TIME_TEXT'				=> 'Tijd',

	// Translators note: retain the format of [" "] as they are creating JSON compatible arrays
	'DAY_NAMES_MIN'			=> '["Zo", "Ma", "Di", "Woe", "Do", "vrij", "Zat"]',
	'MONTH_NAMES' 			=> '["Januari", "Februari", "Maart", "April", "Mei", "Juni", "July", "Augustus", "September", "Oktober", "November", "December"]',
));
