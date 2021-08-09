<?php
	include __DIR__."/../vendor/autoload.php";
	
	include __DIR__."/../app/function/functions.php";

	include __DIR__."/../app/config/config.php";

	use \App\Core\RouterCore;

	$router = new RouterCore();

    include __DIR__."/templates/header.php";
    include __DIR__."/templates/corpo.php";
    include __DIR__."/templates/footer.php";

?>

	<title><?=TITLE?></title>
