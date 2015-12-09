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
	'USER_RANKS'						=> 'Livelli utente',

	'USER_RANKS_BOTS'					=> 'Escludi bot',
	'USER_RANKS_BOTS_EXPLAIN'			=> 'Non includere i bot nell’elenco dei membri del livello.',

	'USER_RANKS_ENABLE'					=> 'Abilita Livelli utente',
	'USER_RANKS_ENABLE_EXPLAIN'			=> 'Permette la visualizzazione dell’elenco utenti per livello.',
	'USER_RANKS_EXPLAIN'				=> 'Qui è possibile gestire le opzioni di visualizzazione dell’elenco utenti per livello.',

	'USER_RANKS_HEADER'					=> 'Link elenco in header',

	'USER_RANKS_LOG'					=> '<strong>Impostazioni per Livelli utente aggiornate</strong>',

	'USER_RANKS_MANAGE'					=> 'Impostazioni',
	'USER_RANKS_MEMBERS'				=> 'Mostra membri',
	'USER_RANKS_MEMBERS_ADMIN'			=> 'Mostra membri ad amministratori',
	'USER_RANKS_MEMBERS_ADMIN_EXPLAIN'	=> 'Mostra i membri per ogni livello solo agli amministratori.',
	'USER_RANKS_MEMBERS_EXPLAIN'		=> 'Mostra i membri per ogni livello dell’elenco a tutti gli utenti registrati.',

	'USER_RANKS_OPTIONS'				=> 'Opzioni',

	'USER_RANKS_SPECIAL'				=> 'Mostra livelli speciali',
	'USER_RANKS_SPECIAL_ADMIN'			=> 'Mostra livelli speciali ad amministratori',
	'USER_RANKS_SPECIAL_ADMIN_EXPLAIN'	=> 'Mostra i livelli speciali solo agli amministratori.',
	'USER_RANKS_SPECIAL_EXPLAIN'		=> 'Mostra i livelli speciali dell’elenco a tutti gli utenti registrati.',
));
