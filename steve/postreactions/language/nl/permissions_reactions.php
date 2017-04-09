<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.2.0 Forum Software package.
 * @author Steve <http://www.steven-clark.online/phpBB3-Extensions/>
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_CAT_REACTIONS'		=> 'Onderwerp/Bericht Reacties',
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_DELETE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties verwijderen',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_DELETE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties verwijderen',
));

// User Permissions	
$lang = array_merge($lang, array(
	'REACTIONS_VERSION'				=> '0.1.6-dev',
	'ACL_U_ADD_REACTIONS'			=> 'Kan Onderwerp/Bericht Reacties toevoegen',
	'ACL_U_DELETE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties verwijderen',
	'ACL_U_DISABLE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties uitschakelen',
	'ACL_U_DISABLE_REACTION_TYPES'	=> 'Kunnen Reactie Types op hun bericht uitschakelen',
	'ACL_U_DISABLE_POST_REACTIONS'	=> 'Kunnen Reacties uitschakelen op hun post',
	'ACL_U_DISABLE_TOPIC_REACTIONS'	=> 'Kunnen Reacties op berichten uitschakelen in hun Onderwerpen',
	'ACL_U_UPDATE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties updaten',
	'ACL_U_VIEW_REACTIONS'			=> 'Kan Onderwerp/Bericht Reacties bekijken',
	'ACL_U_VIEW_REACTIONS_PAGE'		=> 'Kan Geregistreerde gebruikers Onderwerp/Bericht Reacties pagina bekijken',
));
