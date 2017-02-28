<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */

if ((explode(".", $_SERVER['HTTP_HOST'])[1]) == "local") {
	define('ENVIRONMENT', 'development');
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	define('URL_PROTOCOL', 'http://');
} else {
	define('ENVIRONMENT', 'production');
	define('URL_PROTOCOL', 'https://');
}

define('URL_PUBLIC_FOLDER', 'public');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define('START_DIR', __DIR__ . "/../../");