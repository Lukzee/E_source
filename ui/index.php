<?php
SESSION_START();
if(isset($_SESSION['id'])){
    header("location: acad.php");
}

if(isset($_SESSION['admin'])){
    header("location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departmental E_source</title>

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
    <div id="pageWrap">

    <div id="menu">
        <div id="bar">
            <ul>
                <li id="img"><img src="../images/logo.jpg" width="100%" height="100%"></li>
                <li id="hom"><a href="#">HOME</a></li>
                <li><a href="acad.php">ACADEMICS</a></li>
                <li><a href="lib.php">TUTORIALS</a></li>
                <li><a href="cont.php">CONTACT US</a></li>
                <li><a href="siteM.php">KNOW US</a></li>
            </ul>
        </div>

        <hr>
        <div id="subM">
            <p id="myid">
                <a href="#" onclick="showlog();"><i class="fa fa-user"> </i> LOGIN</a>
                <a href="#"  onclick="showreg();"><i class="fa fa-user-plus"> </i> REGISTER</a>
            </p><br>

            <div id="maiModa" class="moda">
                <div class="moda-contnt">
                    <span class="close">&times;</span>
                    <div id="lfrm">
                        <form method="post" id="loginFrm">
                            <input type="text" class="mtxtBox" id="regNo" placeholder="Reg no / username" onkeyup="numonly(this);" required><br><br>

                            <input type="password" class="mtxtBox" id="pass" placeholder="Password" required><br><br>
                            
                            <span style="color:black;">Select usertype</span><br>
                            <select id="usertype" class="mtxtBox" required>
                                <option value="default">Select usertype</option>
                                <option value="student">Student</option>
                                <option value="admin">Admin</option>
                            </select><br><br>

                            <input type="button" value="Log in" id="login" class="btn btn-primary"><br>

                            <a href="#" id="signup" onclick="gosfrm();">Sign up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="forgetpass.php">Forget password ?</a>
                        </form>
                    </div>

                    <div id="sfrm">
                        <form method="post" id="signUpFrm">
                            <input type="text" id="SregNo" class="mtxtBox" placeholder="Reg no" onkeyup="numonly(this);" required><br><br>
                            
                            <select id="Sclass" class="mtxtBox" required>
                                <option value="default">Select class</option>
                                <option value="nd1">ND1</option>
                                <option value="nd2">ND2</option>
                                <option value="dip1">DIP1</option>
                                <option value="dip2">DIP2</option>
                                <option value="hnd1">HND1</option>
                                <option value="hnd2">HND2</option>
                            </select><br><br>

                            <input type="password" id="Spass" class="mtxtBox" placeholder="Password" required><br><br>
                            
                            <input type="text" id="secQues" class="mtxtBox" placeholder="Security question" required><br><br>
                            
                            <input type="text" id="secAns" class="mtxtBox" placeholder="Security answer" required><br><br>
                            
                            <input type="button" value="Sign up" id="Ssignup" class="btn btn-primary"><br>
                            
                            <a href="#" id="Slogin" onclick="golfrm();">Log in</a>
                        </form>
                    </div>
                </div>
            </div>

            <p style="text-align:center;">WELCOME TO THE OFFICIAL E-SOURCE CENTER OF THE F.P.T.B COMPUTER SCIENCE DEPARTMENT</p>
        </div>
    </div>

    <div id="fronP">
        <p class="w">WELCOME</p>

        <div class="midLogo"><img src="../images/logo.jpg" alt="" width="100%" height="100%" id="rd"></div>

        <p class="light_bg"><span class="spantxt">TO F.P.T.B COMPUTER SCIENCE E-SOURCE CENTER</span><br>
        TOWARDS ADVANCE TECHNOLOGY</p>
    </div>

    </div>

    <div class="replyCont" id="replyCont">
        <div class="cont2">
            <div class="wrap">
                <div class="rot"></div>
                <span id="replys_text"></span>
            </div>
        </div>
    </div>
    
    <script src="../js_modules/main.js"></script>
    <script src="../j_query/jquery.js"></script>
    <script src="main.js"></script>
</body>
</html>