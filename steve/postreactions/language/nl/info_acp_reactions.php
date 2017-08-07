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
//ACP MAIN abc..
	'REACTIONS_VERSION'				=> 'Version: 0.5.5-dev',
    'ACP_TPR_DONATE'				=> 'Doneer',
	'ACP_REACTIONS_EXPLAIN'			=> 'Hier kan je reactie Types Toevoegen, bewerken, verwijderen, Inschakelen, Uitschakelen en re-organiseren.',
	'ACP_REACTIONS_SETTINGS_EXPLAIN'=> 'hier kan je algemene instellingen aanpassen voor de Onderwerp/Bericht Extensie.',
	'ACP_REACTIONS_TITLE'			=> 'Onderwerp/Bericht Reacties',
	'ACP_REACTIONS_SETTINGS'		=> 'Instellingen',
	'ACP_REACTIONS_ENABLE'			=> 'Schakel Onderwerp/Bericht Reacties in',
	'ACP_REACTION_ENABLE_PAGE'		=> 'Schakel bekijk Reactie pagina in',
	'ACP_REACTION_ENABLE_PAGES'		=> 'Schakel bekijk Bericht Reactie pagina in',
	'ACP_REACTIONS_RESYNC_ENABLE'	=> 'Schakel Post Reacties re-synchroniseren in',
	'ACP_REACTIONS_RESYNC_ENABLE_EXPLAIN'	=> 'Indien ingeschakeld zullen reactie types geresynchroniseerd worden',	
	'ACP_REACTIONS_SETTING_SAVED'	=> 'Instellingen werden succesvol opgeslagen!',

	'ACP_CDN_REACTION_URL'			=> 'Inhoud Ontvangst Netwerk URL',
	'ACP_REACTION_ADD'				=> 'Voeg nieuwe Onderwerp/Bericht Reacties toe',
	'ACP_REACTION_ADDED'			=> 'Nieuwe Onderwerp/Bericht Reacties toegevoegd',
	'ACP_REACTIONS_CACHE'			=> 'Reacties Afbeelding Cache Tijd',
	'ACP_REACTIONS_CACHE_EXPLAIN'	=> 'Min: <strong>300</strong> Seconden (5 minuten) Max: <strong>86400</strong> Seconden (1 Dag) ',	
	'ACP_REACTION_DELETED_CONFIRM'	=> 'Ben je zeker dat je de data wenst te verwijderen die geassocieerd is met dit Reactie Type? <br /><br />Dit zal alle data en instellingen verwijderen en kan niet ongedaan gemaakt worden!',		
	'ACP_REACTION_DELETED'			=> 'Onderwerp/Bericht Reacties verwijderd',
	'ACP_REACTION_EDIT'				=> 'Bewerk Onderwerp/Bericht Reacties',
	'ACP_REACTION_ENABLE'			=> 'Schakel Onderwerp/Bericht Reacties in',
	'ACP_REACTIONS_HEIGHT'			=> 'Reactie Afbeelding Hoogte',
	'ACP_REACTION_IMAGE'			=> 'Onderwerp/Bericht Reacties afbeelding',

	'ACP_REACTIONS_PER_PAGE'		=> 'Reacties per pagina',
	'ACP_REACTION_PATH'				=> 'Reacties Afbeeldingen opslagpad',
	'ACP_REACTION_PATH_EXPLAIN'		=> 'Pad onder uw phpBB root directory, Vb. images/emoji',
	'ACP_REACTION_TITLE'			=> 'Onderwerp/Bericht Reacties Titel',
	'ACP_REACTION_TYPE'				=> 'Onderwerp/Bericht Type',
	'ACP_REACTION_TYPES'			=> 'Reactie Types',
	'REACTION_TYPE_ID_EMPTY'		=> 'Het opgevraagde reactie tpe bestaat niet',
	'ACP_REACTION_TYPE_COUNT_ENABLE'=> 'Schakel Reactie Type teller in bij de berichten',
	'ACP_REACTION_UPDATED'			=> 'Onderwerp/Bericht Reacties geupdate',
	'ACP_REACTIONS_WIDTH'			=> 'Reactie Afbeelding breedte',
	'ACP_REACTIONS_REC_LIMIT'		=> 'Recente Reacties limiet',
	'ACP_REACTIONS_REC_LIMIT_EXP'	=> 'Aantal recente Reacties om weer te geven in het gebruikers profiel en bekijk reactie pagina..',
	//Working on it... 
	'ACP_WORKING_ON_IT'				=> 'Er wordt aan gewerkt ... Verwijderen van %1s Reacties, %2s resterend...<br /> Gelieve deze pagina niet te verlaten of te vernieuwen.',
	
	//
	'ACP_SELECT_REACTION_IMAGE'		=> 'Selecteer Reactie Afbeelding',
	'ACP_SELECT_REACTION_IMAGE_ALT' => 'Afbeelding voorbeeld',
	'ACP_NO_REACTION_IMAGE_SELECTED'=> 'Geen afbeelding geselecteerd voor Onderwerp/Bericht Reacties.',
	'ACP_POST_AUTHOR_REACT'			=> 'Sta bericht auteurs toe om te reageren op hun eigen bericht',//
	'CAT_REACTION_IMAGE'			=> 'Afbeelding',
	'CAT_REACTION_URL'				=> 'URL',
	'CAT_REACTION_TITLE'			=> 'Titel',
	'CAT_REACTION_ENABLED'			=> 'Ingeschakeld',
	'UPLOAD_NOT_DIR'				=> 'Het Afbeelding opslagpad dat u hebt opgegeven lijkt geen directory te zijn. <br /> %1s',
));