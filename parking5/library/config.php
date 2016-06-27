<?php

ini_set('display_errors', 'On');

error_reporting(E_ALL);

// START SESSION
session_start();

$sitetitle = "USLS Parking Management System";
$date = date ('Y');
$footer_name = "Copyright &copy ".$date." DEMENTORS";

$dbHost='localhost';
$dbUser='root';
$dbPass='';
$dbName='db_parking2';

$dbConn=mysql_connect ($dbHost,$dbUser,$dbPass) or die('MySQL Connect failed.'.mysql_error());
$db=mysql_select_db ($dbName,$dbConn) or die ('Cannot load database'.mysql_error());

include "functions.php";