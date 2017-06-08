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
	'REACTIONS_VERSION'				=> '0.5.5-dev',
	'REACTIONS'						=> 'Reacties',	
	'REACTION_COPY'					=> '<a href="http://www.steven-clark.online/" onclick="window.open(this.href);return false;">phpBB Post Reacties</a> | Emoji art Door: <a href="http://emojione.com/" onclick="window.open(this.href);return false;">EmojiOne</a>',
	'REACTIONS_TITLE'				=> 'Onderwerp/Bericht Reacties',
	'REACTIONS_TITLES'				=> 'Onderwerp/Bericht Reacties &bull; pagine %d',
	//
//Actions
	'ENABLE_POST_REACTIONS'			=> 'Schakel Reacties in op dit Bericht',
	'ENABLE_TOPIC_REACTIONS'		=> 'Schakel Reacties in op dit Onderwerp',
	'EXPLAIN_REACTIONS_POSTING'		=> 'Hier kan je opties selecteren voor Onderwerp en Bericht Reacties',

	'LOG_ACP_REACTION_ADDED'		=> '<strong>Voegde nieuwe Onderwerp/Bericht Reactie toe %1$s</strong>',
	'LOG_ACP_REACTION_EDITED'		=> '<strong>Bewerkte Onderwerp/Bericht Reactie %1$s',
	'LOG_ACP_REACTION_DELETED'		=> '<strong>Verwijderde Onderwerp/Bericht Reacties</strong>',

	'ADD_REACTION'					=> 'Reageer op Bericht',
	'DELETE_REACTION'				=> 'Verwijder reactie',	
	'REACTION_ADDED'				=> 'Reactie toegevoegd',
	'REACTION_DELETED'				=> 'Reactie verwijderd',
	'REACTION_DUPLICATE'			=> 'Je hebt reeds gereageerd op dit bericht',
	'REACTIONS_LIST_VIEW'			=> 'Bekijk Alles',	
	'REACTION_NOTIFICATION'			=> 'Nieuwe Reactie: <strong>“%1$s”</strong> Door: %2$s In:<br /> <strong>%3$s</strong>',
	'REACTION_TYPES'				=> 'Reactie Types',
	'REACTION_TYPE_DUPLICATE'		=> 'Dubbele Reactie',	
	'REACTION_UPDATED'				=> 'Reactie geupdate',
	'RESYNC_REACTIONS'				=> 're-synchroniseer Reacties',	
	'SELECT_REACTION_TYPES'			=> 'Selecteer Reacties die Gebruikers niet kunnen gebruiken om te reageren in jouw berichten',
	'UPDATE_REACTION'				=> 'Update reactie',
	
//Errors
	'NOT_AUTHORISED_REACTIONS'		=> 'Je hebt geen toestemming om Onderwerp/Bericht Reacties te bekijken.',
	'NOTIFICATION_TYPE_STEVE_REACTION' 		=> 'Iemand Reageerde op jouw Onderwerp/Bericht',	
	'REACTIONS_DISABLED'			=> 'De Onderwerp/Bericht Reacties pagina is uitgeschakeld',
	'REACTIONS_DISABLED_USER'		=> 'Deze Onderwerp/Bericht Reactie kan niet weergegeven worden want de gebruiker heeft reacties uitgeschakeld of heeft niet langer permissies.',	
	'REACTIONS_NOT_FOUND'			=> 'Een <strong>Fout</strong> heeft zich voorgedaan',//?
	'REACTION_ERROR'				=> 'Een <strong>Fout</strong> heeft zich voorgedaan, gelieve de pagina te vernieuwen en opnieuw te proberen',
	'RESYNC_DISABLED'				=> 'Re-synchroniseren van Reacties is momenteel uitgeschakeld',
	//

	'TOO_FEW_CHARS'					=> 'Je bericht bevat ter weinig karakters.',
/* 	
	'USER_REACTION'	=> array(
		1 => 'Reaction',
		2 => 'Reactions',
	),
*/	
	'HR_RECENT_REACTIONS'			=> 'Recente Reacties',
	'RECENT_REACTIONS'				=> 'Toont %d Reacties of %2d',
	'REACTION_COUNT_TOTAL'			=> 'Totaal post reacties',	
	'REACTIONS_TOTAL'				=> 'Totaal Reacties',	
	
	'USER_REACTION'					=> 'Reactie %d',
	'USER_REACTIONS'				=> 'Reacties %d',
	'VIEW_REACTIONS'				=> 'Bekijk Reacties',	
	'VIEWING_REACTIONS'				=> 'Bekijkt Onderwerp/Bericht Reacties pagina',
	'WELCOME_REACTIONS_PAGE'		=> 'Welkom %1$s <br /> Een totaal van %2$s Gebruikers hebben reacties ontvangen op hun Berichten , Je kan klikken op de Reactie Afbeelding om de Berichten te bekijken waarop ze reacties ontvangen hebben.<br />',

//pre populated reactions
	'REACTION_CRY'					=> 'Wenen',
	'REACTION_DISLIKE'				=> 'Vind ik NIET leuk',
	'REACTION_FUNNY'				=> 'Grappig',
	'REACTION_HAPPY'				=> 'Gelukkig',
	'REACTION_LIKE'					=> 'Vind ik leuk',
	'REACTION_LOVE'					=> 'Liefde',
	'REACTION_MAD'					=> 'Boos',
	'REACTION_NEUTRAL'				=> 'Neutraal',
	'REACTION_SAD'					=> 'Droevig',
	'REACTION_SURPRISED'			=> 'Verrast',
	'REACTION_UNHAPPY'				=> 'Niet gelukkig',
));
