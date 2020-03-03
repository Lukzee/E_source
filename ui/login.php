<?php
SESSION_START();

// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../API/config_file/db.php';
include_once '../API/modules/login.php';

// instanciate db & connect
$database = new database();
$db = $database->connect();

// instantiate login
$login = new login($db);

if(isset($_POST['login'])) {
    $regNo = $_POST['regNoPHP'];
    $pass = $_POST['passPHP'];
    $usertype = $_POST['usertype'];
    
    // login details
    $login->regNo = $regNo;
    $login->pass = $pass;
    $login->usertype = $usertype;
    
    $login->login_user();
}