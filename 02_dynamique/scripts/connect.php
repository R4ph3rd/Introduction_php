<?php
// affiche les erreurs en évitant les erreurs mineures ne bloquant pas le script

error_reporting(E_WARNING);
ini_set('display_errors', 1);

define("SQL_HOST", "localhost");
define("SQL_LOGIN", "root");
define("SQL_PASS", "phpserver");
define("SQL_BASE", "boulangerie");

$connect = new mysqli(SQL_HOST, SQL_LOGIN, SQL_PASS, SQL_BASE);
// echo $connect;

if (mysqli_connect_error()){
    die('Erreur de connection (' .mysqli_connect_errorno(). ') ' .mysqli_connect_error());
}

mysqli_query($connect, 'SET NAMES UTF8');

?>