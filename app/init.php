<?php

spl_autoload_register(function($class) {
   $class = str_replace("\\", '/', $class);
	include_once $class . '.php';
}); // require all class in core

require_once "Config/Config.php";