<?php

	//include __DIR__."/../../public/css/style.php";	

	function dd($params = [], $die = true){
		
		echo '<pre>'; print_r($params); echo '</pre>';

		if($die) die();
	}

