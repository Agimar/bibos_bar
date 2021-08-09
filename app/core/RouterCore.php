<?php

	namespace App\Core;

	class RouterCore
	{	
		private $uri;
		private $method;

		public function __construct(){

			$this->inicialize();
		}

		public function inicialize(){

			$this->method = $_SERVER['REQUEST_METHOD'];
			$uri = $_SERVER['REQUEST_URI'];
		}

	}
