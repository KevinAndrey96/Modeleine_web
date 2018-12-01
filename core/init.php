<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);


session_start();

$GLOBALS['config'] = array(
  'mysql' => array(
    //'host' => '104.248.228.108',
    'host' => 'localhost',
    'username' => 'modelein_admin',
    'password' => 'importante10',
    'db' => 'modelein_bd'
  ),
  'remember' => array(
    'cookie_name' => 'hash',
    'cookie_expiry' => 604800
  ),
  'language' => array(
    'cookie_name' => 'lang',
    'session_name' => 'lang',
    'cookie_expiry' => 604800
  ),
  'session' => array(
    'session_admin' => 'admin',
    'session_client' => 'client',
    'session_name' => 'freelancer',
    'token_name' => 'token'
  )
);

spl_autoload_register(function($class){
  require_once '../classes/' .$class. '.php';	
});


require_once '../functions/sanitize.php';
require_once '../functions/TruncateHTML.php';
require_once '../functions/textlink.php';
require_once '../functions/urlexpand.php';
require_once '../functions/auto_copyright.php';
require_once '../functions/lang_back.php';
require_once '../functions/Uniqueid.php';
require_once '../functions/Functions.php';
require_once '../functions/Slug.php';
?>