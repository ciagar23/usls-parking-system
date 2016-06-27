<?php
ini_set('display_errors', 'On');

error_reporting(E_ALL);

date_default_timezone_set('Asia/Manila');
// START SESSION
session_start();

$date = date("Y");
$footer_name = "Copyright &copy ".$date." New Venture Incorporated";

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_map';

mysql_connect($host, $username, $password) or die("Cannot connect to MySQL Server");
@mysql_select_db($database) or die ("Cannot connect to Database");

include "function.php";