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
	'REACTIONS_VERSION'					=> '0.1.6-dev',
	'UCP_ENABLE_REACTIONS'				=> 'Schakel Onderwerp/Bericht Reacties in',
	'UCP_ENABLE_REACTIONS_EXPLAIN'		=> 'Nee selecteren zal jouw mogelijkheid verwijderen om te reageren op Berichten, Gebruikers mogelijkheid om te reageren op je Berichten, jouw Reactie pagina, tellingen &amp; notificaties',
	'UCP_DEFAULT_POST_SETTINGS'			=> 'Bewerk standaard Onderwerp/Bericht Reacties instellingen',
	'SELECT_REACTION_TYPES'				=> 'Selecteer Reacties die gebruikers niet kunnen gebruiken op jou Berichten',
	'UCP_REACTIONS_SAVED'				=> 'Onderwerp/Bericht Reacties instellingen werden succesvol opgeslagen!',
	'UCP_REACTIONS_SETTING'				=> 'Instellingen',
	'UCP_REACTIONS_TITLE'				=> 'Onderwerp/Bericht Reacties',		
	'UCP_FOE_REACTIONS_ENABLE'			=> 'Schakel vijanden reacties in',
	'UCP_FOE_REACTIONS_EXPLAIN'			=> 'Sta gebruikers toe die momenteel in je %1$s lijst staan om te reageren op je posten?',	
	'UCP_POST_REACTIONS_ENABLE'			=> 'Schakel Post Reacties in',
	'UCP_POST_REACTIONS_EXPLAIN'		=> 'Sta gebruikers toe om te reageren op je Berichten?',
	'UCP_TOPIC_REACTIONS_ENABLE'		=> 'Schakel Onderwerp Reacties in',	
	'UCP_TOPIC_REACTIONS_EXPLAIN'		=> 'Sta gebruikers toe om Reacties te gebruiken in je Onderwerpen?',
));
