<?php

function isTor($ip) {
	global $torexits;

	return $ip && in_array($ip, $torexits);
}
