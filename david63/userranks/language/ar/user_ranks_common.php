<?php
/**
*
* @package User Ranks Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'NO_MEMBERS'		=> 'لا يوجد أعضاء في هذه الرُتبة',

	'RANK_IMAGE'		=> 'صورة الرُتبة',

	'RANK_MEMBERS'		=> 'الأعضاء',
	'RANK_MINIMUM'		=> 'الحد الأدنى للمشاركات',

	'USER_RANKS'		=> 'رُتـَب العضو',
	//'USER_RANKS_LOG'	=> '<strong>تم تحديث إعدادات رُتـَب العضو بنجاح</strong>',
	'USER_RANKS_TITLE'	=> 'قائمة رُتـَب العضو',

	'RANK_TITLE'		=> 'عنوان الرُتبة',
));
