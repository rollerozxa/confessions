<?php
if (!file_exists('conf/config.php'))
	die('Please read the installing instructions in the README file.');

// load profiler first
require_once('lib/profiler.php');
$profiler = new Profiler();

require_once('conf/config.php');
require_once('conf/torbulkexitlist.php');
require_once('vendor/autoload.php');
foreach (glob("lib/*.php") as $file)
	require_once($file);

if (php_sapi_name() !== 'cli') {
	// Shorter variables for common $_SERVER values.
	$ipaddr = $_SERVER['REMOTE_ADDR'];
} else {
	// Dummy values for CLI usage
	$ipaddr = '127.0.0.1';
}
