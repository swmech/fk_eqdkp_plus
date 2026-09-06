<?php
if (!defined('EQDKP_INC')) { die('Do not access this file directly.'); }

$ftphost = '';
$ftpport = 21;
$ftpuser = '';
$ftppass = '';
$ftproot = '';
$use_ftp = 0;

// Read Docker/Host Environment Variables with working defaults
$dbtype = 'mysqli';
$dbhost = $_ENV['EQDKP_DB_HOST'] ?? $_SERVER['EQDKP_DB_HOST'] ?? getenv('EQDKP_DB_HOST') ?: 'db';
$dbport = 3306;
$dbname = $_ENV['EQDKP_DB_NAME'] ?? $_SERVER['EQDKP_DB_NAME'] ?? getenv('EQDKP_DB_NAME') ?: 'eqdkp_db';
$dbuser = $_ENV['EQDKP_DB_USER'] ?? $_SERVER['EQDKP_DB_USER'] ?? getenv('EQDKP_DB_USER') ?: 'eqdkp_user';
$dbpass = $_ENV['EQDKP_DB_PW']   ?? $_SERVER['EQDKP_DB_PW']   ?? getenv('EQDKP_DB_PW')   ?: '';
$dbpers = false;
$table_prefix = 'eqdkp23_';

define("INSTALLED_VERSION", "2.3.39.0");

$encryptionKey = $_ENV['EQDKP_ENCRYPTION_KEY'] ?? $_SERVER['EQDKP_ENCRYPTION_KEY'] ?? getenv('EQDKP_ENCRYPTION_KEY') ?: '';

define('EQDKP_INSTALLED', true);
?>
