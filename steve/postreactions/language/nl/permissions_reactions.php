<?php
/**
 *
 * Topic/Post Reactions. An extension for the phpBB 3.2.0 Forum Software package.
 * @author Steve <http://www.steven-clark.online/phpBB3-Extensions/>
  * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 * @version 0.5.5-dev
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

// Admin Permissions //0.6
$lang = array_merge($lang, array(
	'ACL_A_DELETE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties verwijderen',
));

// Moderator Permissions //0.6
$lang = array_merge($lang, array(
	'ACL_M_DELETE_REACTIONS'		=> 'Kan Onderwerp/Bericht Reacties verwijderen',
));

// User Permissions	
$lang = array_merge($lang, array(
	'ACL_U_ADD_REACTIONS'				=> 'Kan reacties toevoegen',
	'ACL_U_CHANGE_REACTIONS'			=> 'Kan reacties wijzigen',	
	'ACL_U_DELETE_REACTIONS'			=> 'Kan reacties verwijderen',
	'ACL_U_DISABLE_REACTIONS'			=> 'Kan Onderwerp/Bericht Reacties extensie uitschakelen',
	'ACL_U_DISABLE_REACTION_TYPES'		=> 'Kunnen Reactie Types op hun bericht uitschakelen',
	'ACL_U_DISABLE_POST_REACTIONS'		=> 'Kunnen Reacties uitschakelen op hun post',
	'ACL_U_DISABLE_TOPIC_REACTIONS'		=> 'Kunnen Reacties op berichten uitschakelen in hun Onderwerpen',
	'ACL_U_MANAGE_REACTIONS_SETTINGS'	=> 'Kan UCP Onderwerp/Bericht Reacties instellingen beheren',
	'ACL_U_RESYNC_REACTIONS'			=> 'Kan Post Reacties re-synchroniseren',
	'ACL_U_VIEW_REACTIONS'				=> 'Kan reacties bekijken',
	'ACL_U_VIEW_REACTIONS_PAGE'			=> 'Kan reacties pagina bekijken',
	'ACL_U_VIEW_POST_REACTIONS_PAGE'	=> 'Kan de Post Reacties pagina bekijken',
));