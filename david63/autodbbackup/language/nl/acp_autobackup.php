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
	'AUTO_DB_BACKUP_COPIES'					=> 'Opgeslagen back-ups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Het aantal back-ups dat op de server wordt opgeslagen.<br>0 betekent uitgeschakeld en alle back-ups worden op de server opgeslagen.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Automatische database backup inschakelen',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Automatische backup van databases inschakelen of uitschakelen',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Bestandstype',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Selecteer het bestandstype voor de back-ups.',
	'AUTO_DB_BACKUP_FREQ'					=> 'Backup frequentie',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Stel de backup frequentie in uren in.',
	'AUTO_DB_BACKUP_MAINTAIN_FREQ'			=> 'De tijd van de backup frequentie behouden',
	'AUTO_DB_BACKUP_MAINTAIN_FREQ_EXPLAIN'	=> 'Dit instellen op <strong>“Ja”</strong> betekent dat de backup frequentietijd zal worden gehandhaafd.<br>Bijvoorbeeld: als de tijd is ingesteld op 23:15 uur en de frequentie is ingesteld op 24 uur, is de volgende backup de volgende dag om 23:15 uur. Als dit is ingesteld op <strong>“Nee”</strong> dan zal de volgende backup 24 uur na de laatste backup gebeuren.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimaliseer de database voordat de backup uitvoert',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimaliseer alleen niet optimale databasetabellen voordat de backup maakt.',
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Auto database backup instellingen',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Auto database backup instellingen gewijzigd.',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Hier kunt u standaardinstellingen voor automatische database backups instellen. Afhankelijk van uw serverconfiguratie kunt u mogelijk de database comprimeren.<br>Alle back-ups worden opgeslagen in de <samp>/store/</samp> folder. U kunt de backup herstellen via het paneel <em>Herstellen</em>.',
	'AUTO_DB_BACKUP_TIME'					=> 'Volgende backup tijd',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'De <strong>Volgende backup tijd</strong> is niet correct. De tijd moet in de toekomst worden gedefinieerd.',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Het tijdstip waarop de volgende backup van de database moet worden gemaakt.<br><strong>Merk op:</strong> De opgegeven datum/tijd moet in de toekomst liggen.',

	'CLICK_SELECT'							=> 'Klik in het tekstvak om de datum/tijd te selecteren',
	'DATE_FORMAT_ERROR'						=> 'De volgende backup datum/tijdnotatie is ongeldig.',
	'VERSION'								=> 'Versie',

	'FILETYPE'	=> array(
		'gzip'	=> 'gzip',
		'bzip2'	=> 'bzip2',
		'text'	=> 'text',
	),
));

// Date/time picker
$lang = array_merge($lang, array(
	'CLOSE_TEXT'			=> 'Klaar',
	'CURRENT_TEXT_DATE'		=> 'Nu',
	'HOUR_TEXT'				=> 'Uur',
	'MINUTE_TEXT'			=> 'Minuut',
	'NEXT_TEXT'				=> 'Volgende »',
	'PREV_TEXT'				=> '« Vorige',
	'TIME_TEXT'				=> 'Tijd',

	// Translators note: retain the format of [" "] as they are creating JSON compatible arrays
	'DAY_NAMES_MIN'			=> '["Zon", "Ma", "Di", "Woe", "Do", "Vr", "Zat"]',
	'MONTH_NAMES' 			=> '["Januari", "Februari", "Maart", "April", "Mei", "Juni", "July", "Augustus", "September", "Oktober", "November", "December"]',
));

// Donate
$lang = array_merge($lang, array(
	'DONATE'					=> 'Doneer',
	'DONATE_EXTENSIONS'			=> 'Doneer aan mijn extensies',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Deze extensie is, net als bij al mijn extensies, volledig gratis. Als u er baat bij heeft gehad, kunt u overwegen een donatie te doen door op de knop PayPal donatie aan de overkant te klikken - ik zou het op prijs stellen. Ik beloof dat er geen spam of verzoeken om verdere donaties zullen zijn, hoewel ze altijd welkom zouden zijn.',

	'PAYPAL_BUTTON'				=> 'Doneer met de PayPal knop',
	'PAYPAL_TITLE'				=> 'PayPal - De veiligere, gemakkelijkere manier om online te betalen!',
));
