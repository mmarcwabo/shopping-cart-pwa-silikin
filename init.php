<?php

/**
 * Loads all configurations from environment variables
 */
require('vendor/autoload.php');

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

# app identity
define('_APP_NAME_', $_ENV['APP_NAME']);
define('_DB_NAME_', $_ENV['DB_NAME']);
define('_DB_UNAME_', $_ENV['DB_UNAME']);
define('_DB_PASS_', $_ENV['DB_PASS']);
define('_DB_HOST_', $_ENV['DB_HOST']);
define('_TVA_', $_ENV['TVA']);
define('_TAX_VALUE_', $_ENV['TAX_VALUE']);
define('_CURRENCY_', $_ENV['CURRENCY']);

// Connect to DB
// To do place it in approriate place					
$mysqli = new mysqli(_DB_HOST_, _DB_UNAME_, _DB_PASS_,_DB_NAME_);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}