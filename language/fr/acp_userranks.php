<?php
/**
 *
 * User ranks list. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 david63
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
	'USER_RANKS_BOTS'					=> 'Ignorer les robots et les invités',
	'USER_RANKS_BOTS_EXPLAIN'			=> 'Permet d’exclure les robots et les invités dans la liste des rangs des utilisateurs.',

	'USER_RANKS_EXPLAIN'				=> 'Sur cette page il est possible de gérer les options d’affichage de la liste des rangs des utilisateurs.',

	'USER_RANKS_HEADER'					=> 'Afficher le lien vers la liste des rangs des utilisateurs dans la barre de navigation',

	'USER_RANKS_MEMBERS'				=> 'Afficher les membres',
	'USER_RANKS_MEMBERS_ADMIN'			=> 'Afficher les membres uniquement aux administrateurs',
	'USER_RANKS_MEMBERS_ADMIN_EXPLAIN'	=> 'Permet d’afficher les membres de chaque rang uniquement aux administrateurs.',
	'USER_RANKS_MEMBERS_EXPLAIN'		=> 'Permet d’afficher les membres de chaque rang aux utilisateurs connectés.',

	'USER_RANKS_OPTIONS'				=> 'Options des rangs des utilisateurs',

	'USER_RANKS_QUICK_LINK'				=> 'Afficher le lien vers la liste des rangs des utilisateurs dans le menu « Accès rapide »',

	'USER_RANKS_SPECIAL'				=> 'Afficher les rangs spéciaux',
	'USER_RANKS_SPECIAL_ADMIN'			=> 'Afficher les rangs spéciaux aux administrateurs',
	'USER_RANKS_SPECIAL_ADMIN_EXPLAIN'	=> 'Permet d’afficher les rangs spéciaux uniquement aux administrateurs.',
	'USER_RANKS_SPECIAL_EXPLAIN'		=> 'Permet d’afficher les rangs spéciaux aux utilisateurs connectés.',

	'VERSION'							=> 'Version',
));
