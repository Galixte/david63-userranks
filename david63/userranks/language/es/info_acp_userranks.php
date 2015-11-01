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
	'USER_RANKS'						=> 'Rangos de Usuario',

	'USER_RANKS_BOTS'					=> 'Ignorar robots',
	'USER_RANKS_BOTS_EXPLAIN'		=> 'No incluir Robots en la lista de rangos de usuarios.',

	'USER_RANKS_ENABLE'					=> 'Habilitar Rangos de Usuario',
	'USER_RANKS_ENABLE_EXPLAIN'		=> 'Habilitar para mostrar los rangos de usuario.',
	'USER_RANKS_EXPLAIN'				=> 'Aquí puede gestionar las opciones de visualización de la lista de Rangos de Usuario.',

	'USER_RANKS_HEADER'			=> 'Mostrar enlace de rangos de usuario en el encabezado',

	'USER_RANKS_LOG'					=> '<strong>Ajustes de Rangos de Usuario actualizados</strong>',

	'USER_RANKS_MANAGE'					=> 'Gestionar rangos de usuario',
	'USER_RANKS_MEMBERS'				=> 'Mostrar usuarios',
	'USER_RANKS_MEMBERS_ADMIN'			=> 'Mostrar usuarios a Administradores',
	'USER_RANKS_MEMBERS_ADMIN_EXPLAIN'	=> 'Mostrar solamente a usuarios de cada rango a Administradores.',
	'USER_RANKS_MEMBERS_EXPLAIN'		=> 'Mostrar a los usuarios que se encuentran en cada rango en la lista de Rangos de Usuario a todos los usuarios identificados.',

	'USER_RANKS_OPTIONS'				=> 'Opciones de rangos de usuario',

	'USER_RANKS_SPECIAL'				=> 'Mostrar rangos especiales',
	'USER_RANKS_SPECIAL_ADMIN'	=> 'Mostrar rangos especiales a Administradores',
	'USER_RANKS_SPECIAL_ADMIN_EXPLAIN'	=> 'Mostrar solamente rangos especiales a Administradores.',
	'USER_RANKS_SPECIAL_EXPLAIN'		=> 'Mostrar los rangos especiales en la lista de Rangos de Usuario a todos los usuarios identificados.',
));
