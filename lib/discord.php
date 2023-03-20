<?php

use \DiscordWebhooks\Client;
use \DiscordWebhooks\Embed;

/**
 * Trigger the confession webhook.
 */
function webhook($confession) {
	global $webhook;

	$webhook = new Client($webhook);
	$mbd = new Embed();

	$mbd->description($confession)
		->color(1294139);

	$webhook->embed($mbd)->send();
}
