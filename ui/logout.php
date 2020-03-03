<?php
SESSION_START();

// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// log out users
session_destroy();
header("location: index.php");
exit();

?>