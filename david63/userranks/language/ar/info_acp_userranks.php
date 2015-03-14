<?php
/**
*
* @package User Ranks Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'USER_RANKS'						=> 'رُتـَب العضو',

	'USER_RANKS_BOTS'					=> 'تجاهل محركات البحث ',
	'USER_RANKS_BOTS_EXPLAIN'			=> 'عدم اظهار محركات البحث في قائمة رُتـَب الأعضاء.',

	'USER_RANKS_ENABLE'					=> 'تفعيل رُتـَب العضو ',
	'USER_RANKS_ENABLE_EXPLAIN'			=> 'اختيارك "نعم" يعني اظهار رُتـَب العضو.',
	'USER_RANKS_EXPLAIN'				=> 'من هنا تستطيع إدارة الخيارات لعرض قائمة الرُتـَب للعضو.',

	'USER_RANKS_HEADER'					=> 'اظهار رابط رُتـَب العضو في الشريط العلوي ',

	'USER_RANKS_LOG'					=> '<strong>تم تحديث الإعدادات بنجاح</strong>',

	'USER_RANKS_MANAGE'					=> 'الإعدادات',
	'USER_RANKS_MEMBERS'				=> 'اظهار الأعضاء ',
	'USER_RANKS_MEMBERS_ADMIN'			=> 'اظهار الأعضاء للمدراء',
	'USER_RANKS_MEMBERS_ADMIN_EXPLAIN'	=> 'المدراء فقط يستطيعون مُشاهدة الأعضاء في كل رُتبة.',
	'USER_RANKS_MEMBERS_EXPLAIN'		=> 'جميع الأعضاء يستطيع مُشاهدة اسماء الأعضاء الموجودين في كل رُتبة.',

	'USER_RANKS_OPTIONS'				=> 'الخيارات ',

	'USER_RANKS_SPECIAL'				=> 'اظهار الرُتب الخاصة ',
	'USER_RANKS_SPECIAL_ADMIN'			=> 'اظهار الرُتب الخاصة للمدراء ',
	'USER_RANKS_SPECIAL_ADMIN_EXPLAIN'	=> 'المدراء فقط يستطيعون مُشاهدة الرُتب الخاصة.',
	'USER_RANKS_SPECIAL_EXPLAIN'		=> 'جميع الأعضاء يستطيع مُشاهدة الرُتب الخاصة.',
));
