<?php
require('lib/common.php');

$confession = $_POST['confession'] ?? null;

if ($confession) {
	webhook($confession);
	die(header("Location: ./"));
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<title><?=$title ?></title>

	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<header><a href="./"><?=$title ?></a></header>

	<div class="container">
		<p>Write your super secret confessions here. It will be made available in the <code><?=$channel ?></code> channel inside of the Discord server.</p>

		<form method="POST">
			<p><textarea name="confession" placeholder="I like putting milk before the cereal..." cols="80" rows="10"></textarea></p>

			<p><input type="submit" value="Submit your confession!"></input></p>
		</form>
	</div>

	<footer><?=$profiler->getStats()?>. Gosh!</footer>
</body>
</html>
