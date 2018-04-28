<?php
/**
*
* @package Auto db Backup (3.2)
* @copyright (c) 2015 david63
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
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
	'AUTO_DB_BACKUP_COPIES'				=> 'Opgeslagen backups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'		=> 'Het aantal back-ups dat op de server wordt opgeslagen.<br />0 betekent uitgeschakeld en alle back-ups zullen worden opgeslagen op de server.',
	'AUTO_DB_BACKUP_ENABLE'				=> 'Auto database back-up inschakelen',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'		=> 'Automatische back-up van databases in of uitschakelen',
	'AUTO_DB_BACKUP_FILETYPE'			=> 'Bestandstype',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'	=> 'Kies het bestandstype voor back-ups.',
	'AUTO_DB_BACKUP_FREQ'				=> 'Back-up frequentie',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'		=> 'Stel de back-up frequentie in uren in.',
	'AUTO_DB_BACKUP_OPTIMIZE'			=> 'Optimaliseer de database voordat u de back-up uitvoert',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'	=> 'Optimaliseer alleen niet-optimale databasetabellen voordat u de back-up maakt.',
	'AUTO_DB_BACKUP_SETTINGS'			=> 'Auto database back-up instellingen',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> 'Auto database back-up instellingen gewijzigd.',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'	=> 'Hier kunt u standaard instellingen instellen voor automatische database backups. Afhankelijk van uw server configuratie kunt u mogelijk de database comprimeren.<br />Alle back-ups worden opgeslagen in de <samp>/store/</samp> folder. U kunt de backups herstellen via het <em>"Herstellen"</em> menu.',
	'AUTO_DB_BACKUP_TIME'				=> 'Volgende back-up tijd',
	'AUTO_DB_BACKUP_TIME_ERROR'			=> 'The <strong>volgende back-up tijd</strong> De tijd moet in de toekomst worden gedefinieerd.',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'		=> 'Het tijdstip waarop de volgende back-up van de database moet worden gemaakt.<br /><strong>Opgelet:</strong> De opgegeven datum/tijd moet in de toekomst liggen.',

	'DATE_TIME_ERROR'					=> 'The <strong>volgende back-up datum</strong> is ongeldig.',

	'HOUR'		=> 'Uur',
	'MINUTE'	=> 'Minuut',

	'FILETYPE'	=> array(
		'gzip'	=> 'gzip',
		'bzip2'	=> 'bzip2',
		'text'	=> 'text',
	),

	'VERSION'							=> 'Versie',
));
