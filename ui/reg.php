<?php
  // headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../API/config_file/db.php';
  include_once '../API/modules/reg.php';

  if(isset($_POST['signUp'])) {

    // instanciate db & connect
    $database = new database();
    $db = $database->connect();

    // instantiate registration class for new members
    $reg = new reg_User($db);

    $regNo = $_POST['regNoPHP'];
    $class = $_POST['classPHP'];
    $password = $_POST['passwordPHP'];
    $ques = $_POST['ques'];
    $ans = $_POST['ans'];

    $reg->regNo = $regNo;
    $reg->class = $class;
    $reg->password = $password;
    $reg->ques = $ques;
    $reg->ans = $ans;
    
    // Register new member
    if($reg->Register()) {
      echo 'Welcome <i class="fa fa-handshake"></i> ';
        exit();

    } else {
      echo 'Error Creating Account';
        exit();
      
    }
    
  }