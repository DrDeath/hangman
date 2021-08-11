<?php
/**
*
* @package Hangman v0.3.0
* @copyright (c) 2021 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_HANGMAN'						=> 'Hangman',
	'ACP_HANGMAN_SETTINGS'				=> 'Settings',
	'ACP_HANGMAN_EXT_SETTINGS'			=> 'Extension settings',
	'ACP_HANGMAN_AUTODELETE'			=> 'Delete used terms?',
	'ACP_HANGMAN_AUTODELETE_EXP'		=> 'If you select ´Yes´ then a term used in a game will be deleted from the data base after this game is finished.',
	'ACP_HANGMAN_CATEGORY_ENABLE'		=> 'Enable categories?',
	'ACP_HANGMAN_CATEGORY_ENABLE_EXP'	=> 'If you select ´Yes´ an additional text field will be displayed while creating a search term. In this field you
											can enter a category name to which this term belongs.<br>
											This category wil be displayed above the search term field in the game tab and serves as a little hint.',
	'ACP_HANGMAN_CATEGORY_ENFORCE'		=> 'Enforce catgory input?',
	'ACP_HANGMAN_CATEGORY_ENFORCE_EXP'	=> 'If you select ´Yes´ then the input of a category will be enforced which means that the input form can not be submitted
											without an input in the category input field. This setting is only applicable if ´Enable categories´ is enabled.',
	'ACP_HANGMAN_GAME_SETTINGS'			=> 'Game settings',
	'ACP_HANGMAN_GAME_SETTINGS_EXP'		=> 'Here you can configure the settings for the number of lives to play with (failed tries) and for points to gain.<br>
											All inputs are subject to getting checked according to the individual hints and changed if necessary.',
	'ACP_HANGMAN_LIVES'					=> 'Number of failed tries (lives)',
	'ACP_HANGMAN_LIVES_EXP'				=> 'Number of failed tries until the player dances on air and loses the game<br>
											(integer between 4 and 10)',
	'ACP_HANGMAN_POINTS_WIN'			=> 'Points if winning',
	'ACP_HANGMAN_POINTS_WIN_EXP'		=> 'Number of points to gain if the player solves the puzzle<br>
											(integer greater than zero)',
	'ACP_HANGMAN_POINTS_LOOSE'			=> 'Points if losing',
	'ACP_HANGMAN_POINTS_LOOSE_EXP'		=> 'Number of points debited if the player fails to solve the puzzle<br>
											(integer smaller than or equal to zero)',
	'ACP_HANGMAN_POINTS_LETTER'			=> 'Number of points to gain with correct letter',
	'ACP_HANGMAN_POINTS_LETTER_EXP'		=> 'Number of points to gain by selecting a letter belonging to the puzzle<br>
											(integer greater than or equal to zero)',
	'ACP_HANGMAN_POINTS_WORD'			=> 'Points for a new quote',
	'ACP_HANGMAN_POINTS_WORD_EXP'		=> 'Number of points to gain by entering a term or quote into the database<br>
											(integer greater than or equal to zero)',
	'ACP_HANGMAN_SETTING_SAVED'			=> 'Settings for the Hangman Game successfully saved.',
	'RESET_HIGHSCORE'					=> 'Reset Highscore',
	'RESET_HIGHSCORE_CAUTION'			=> '<strong>CAUTION:</strong> This action is irreversible!',
	'HANGMAN_SCORE_TABLE_CLEARED'		=> 'Hangman Highscore table cleared',
	'HIGHSCORE_TABLE_CLEARED'			=> 'Highscore table cleared',
	'SUPPORT_HANGMAN'					=> 'If you want to support Hangman´s development please use this link to donate:<br>',
]);
