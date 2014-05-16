<?php

function init($module){
	$module = addslashes($module);
	switch($module){
		// switch between multiple databases and globals by calling this function
		case "jot":
		break;
		case "queued":
		break;
		case "bugger":
		break;
		case "lucent":
		break;
		default:
			// return 0;
		break;
	}
}

function log($fn){
	$fn = stripslashes($fn);
	switch($fn){
		// switch between multiple strings and values to log
		case "add":
		break;
		case "remove":
		break;
		case "update":
		break;
		default:
			// return 0;
		break;
	}
}

function create($type){
	switch($type){
		// switch between types of generation functions
		case "jot":
		break;
		case "bug":
		break;
		default:
			// return 0;
		break;
	}
}

?>