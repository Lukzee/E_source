<?php
SESSION_START();

if($_SESSION['id'] == ''){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--Boostrap css files--->
    <link rel="stylesheet" href="../css/boostrap/bootstrap.css">
    <link rel="stylesheet" href="../css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/boostrap/mdb.min.css">

    <!---Boostwatch css files--->
    <link rel="stylesheet" href="../css/boostwatch/bootstrap.min.css">

    <!--My css file-->
    <link rel="stylesheet" href="../css/main.css">

    <!---fontawesome icons---->
    <link rel="stylesheet" href="../icons/font_awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../icons/font_awesome/css/all.min.css">
</head>
<body>
    <div id="menu">
        <div id="bar">
            <ul>
                <li id="img"><img src="../images/logo.jpg" width="100%" height="100%"></li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="acad.php">ACADEMICS</a></li>
                <li><a href="lib.php">TUTORIALS</a></li>
                <li id="hom"><a href="#">CONTACT US</a></li>
                <li><a href="siteM.php">KNOW US</a></li>
            </ul>
        </div>

        <hr>
        <div id="subM">
            <p id="myid">
                <a href="logout.php"><i class="fa fa-user-times"> </i> LOGOUT</a>
            </p><br>

            <p style="text-align:center;">WELCOME TO THE OFFICIAL E-SOURCE CENTER OF THE F.P.T.B COMPUTER SCIENCE DEPARTMENT</p>
        </div>
    </div>

    <div class="interface">
        <div class="conAddrss">
            <img src="../images/dep.jpg" width="30%" height="20%" alt="">

            <address id="addrss">
                <h3><strong>Contact us</strong></h3><br>
                <p><strong><i class="fa fa-phone"></i> Contact :</strong> 0706 110 4170</p>
                <p><strong><i class="fa fa-rss"></i> mail :</strong> info@fptb.edu.ng</p>
                <p><strong><i class="fa fa-sitemap"></i> Portal :</strong> portal.fptb.edu.ng</p>
                <p><strong><i class="fa fa-home"></i> Website :</strong> fptb.edu.ng </p>
            </address>
        </div>
    </div>
</body>
</html>