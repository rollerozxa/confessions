<?php

use \DiscordWebhooks\Client;
use \DiscordWebhooks\Embed;

/**
 * Trigger the confession webhook.
 */
function webhook($confession) {
	global $webhook, $title;

	$webhook = new Client($webhook);
	$mbd = new Embed();

	$mbd->description($confession)
		->timestamp(date(DATE_ATOM))
		->color(1294139)
		->footer($title);

	$webhook->embed($mbd)->send();
}
