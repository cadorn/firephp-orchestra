<?php

/**
 * Load FirePHP
 */

define('INSIGHT_IPS', '*');
define('INSIGHT_AUTHKEYS', '*');
define('INSIGHT_PATHS', dirname(__FILE__));
define('INSIGHT_SERVER_PATH', '/');

require_once('phar://firephp.phar/FirePHP/Init.php');

/**
 * Application Code
 */

echo 'Hello World!';

// @see http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/
FirePHP::to('request')->console('Dev')->log('Hello World');
