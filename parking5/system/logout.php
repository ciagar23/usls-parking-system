<?php
require_once '../library/config.php';
unset($_SESSION['user']['user_login']);

session_destroy();
header("Location: ../index.php");
exit;
?>

