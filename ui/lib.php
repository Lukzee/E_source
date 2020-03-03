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
                <li id="hom"><a href="#">TUTORIALS</a></li>
                <li><a href="cont.php">CONTACT US</a></li>
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
        <a href="https://github.com" target="_blank"><img src="../images/download.jpg" width="30%" height="48%" alt="" class="img"></a>

        <a href="https://www.w3schools.com/" target="_blank"><img src="../images/im.png" width="30%" height="48%" alt="" class="img"></a>

        <a href="https://www.codecademy.com/catalog/subject/all" target="_blank"><img src="../images/index.jpg" width="30%" height="48%" alt="" class="img"></a>


        <a href="https://ocw.mit.edu/courses/intro-programming/" target="_blank"><img src="../images/image1.jpg" width="30%" height="48%" alt="" class="img"></a>

        <a href="https://www.udemy.com/?LSNPUBID=ygZRWO0LhtI&pmtag=UDEMYQ330&ranEAID=ygZRWO0LhtI&ranMID=39197&ranSiteID=ygZRWO0LhtI-Z3SzYsX6h3VP52YP_WS_6w&utm_campaign=_._pn__._ci__._ex_Y_._&utm_content=textlink&utm_medium=linkshare&utm_source=growth-affiliate&utm_term=" target="_blank"><img src="../images/image2.jpg" width="30%" height="48%" alt="" class="img"></a>

        <a href="https://www.udacity.com/" target="_blank"><img src="../images/image3.jpg" width="30%" height="48%" alt="" class="img"></a>
    </div>
</body>
</html>