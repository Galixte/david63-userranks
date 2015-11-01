<?php
/**
*
* @package User Ranks Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/// DEVELOPERS PLEASE NOTE
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
	'USER_RANKS'						=> 'Benutzerränge',

	'USER_RANKS_BOTS'					=> 'Bots ignorieren',
	'USER_RANKS_BOTS_EXPLAIN'			=> 'Bots nicht in der Liste der Rangmitglieder anzeigen.',

	'USER_RANKS_ENABLE'					=> 'Benutzerränge aktivieren',
	'USER_RANKS_ENABLE_EXPLAIN'			=> 'Anzeige der Benutzerränge aktivieren.',
	'USER_RANKS_EXPLAIN'				=> 'Hier kannst du die Einstellungen für die Liste der Benutzerränge vornehmen.',

	'USER_RANKS_HEADER'					=> 'Link zu den Benutzerrängen oben auf der Seite anzeigen',

	'USER_RANKS_LOG'					=> '<strong>Die Einstellungen für die Benutzerränge wurden aktualisiert.</strong>',

	'USER_RANKS_MANAGE'					=> 'Benutzerränge verwalten',
	'USER_RANKS_MEMBERS'				=> 'Mitglieder anzeigen',
	'USER_RANKS_MEMBERS_ADMIN'			=> 'Die Administratoren können die Mitglieder sehen',
	'USER_RANKS_MEMBERS_ADMIN_EXPLAIN'	=> 'Nur die Administratoren können die Mitglieder jedes einzelnen Ranges sehen.',
	'USER_RANKS_MEMBERS_EXPLAIN'		=> 'Alle eingeloggten Benutzer können die Mitglieder, die in jedem einzelnen Rang sind, sehen.',

	'USER_RANKS_OPTIONS'				=> 'Optionen für die Benutzerränge',

	'USER_RANKS_SPECIAL'				=> 'Spezialränge anzeigen',
	'USER_RANKS_SPECIAL_ADMIN'			=> 'Administratoren können die Spezialränge sehen',
	'USER_RANKS_SPECIAL_ADMIN_EXPLAIN'	=> 'Nur die Administratoren können die Spezialränge sehen.',
	'USER_RANKS_SPECIAL_EXPLAIN'		=> 'Alle eingeloggten Benutzer können die Spezialränge in der Liste der Benutzerränge sehen.',
));
