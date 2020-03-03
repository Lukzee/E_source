<?php
SESSION_START();
$conn=mysqli_connect("localhost","root","","studentinfo");

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
    
    <style>
        #acdTxt {
            font-size: 20px;
            font-family: monospace;
            background-color: #def7f7;
            padding: 10px;
        }
        
        .cnt h1 {
            font-size: 30px;
        }
        
    </style>
</head>
<body>
    <div id="menu">
        <div id="bar">
            <ul>
                <li id="img"><img src="../images/logo.jpg" width="100%" height="100%"></li>
                <li><a href="index.php">HOME</a></li>
                <li id="hom"><a href="acad.php">ACADEMICS</a></li>
                <li><a href="lib.php">TUTORIALS</a></li>
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
        <div id="sectn">
            <p id="acdTxt">Click <strong>(Choose Level)</strong> to select your class...</p>
            <button class="accordion" onclick="action();">Choose Level
                <i class="fa fa-bars" id="rt"></i>
            </button>
            
            <div class="choose" id="choose">
                <button class="accd2" onclick="actn2();">ND 1/DIP 1 Students <i class="fa fa-plus" id="rt2a"></i> <i class="fa fa-minus" id="rt2"></i></button>
                    <div class="choose2" id="chsn1">
                        <p id="sem" onclick="nd1f();">First Semester</p>
                        <p id="sem" onclick="nd1s();">Second Semester</p>
                    </div>

                <button class="accd3" onclick="actn3();">ND 2/DIP 2 Students <i class="fa fa-plus" id="rt3a"></i> <i class="fa fa-minus" id="rt3"></i></button>
                    <div class="choose2" id="chsn2">
                        <p id="sem" onclick="nd2f();">First Semester</p>
                        <p id="sem" onclick="nd2s();">Second Semester</p>
                    </div>

                <button class="accd2" onclick="actn4();">HND 1 Students <i class="fa fa-plus" id="rt4a"></i> <i class="fa fa-minus" id="rt4"></i></button>
                    <div class="choose2" id="chshn1">
                        <p id="sem" onclick="hnd1f();">First Semester</p>
                        <p id="sem" onclick="hnd1s();">Second Semester</p>
                    </div>
                
                <button class="accd3" onclick="actn5();">HND 2 Students <i class="fa fa-plus" id="rt5a"></i> <i class="fa fa-minus" id="rt5"></i></button>
                    <div class="choose2" id="chshn2">
                        <p id="sem" onclick="hnd2f();">First Semester</p>
                        <p id="sem" onclick="hnd2s();">Second Semester</p>
                    </div>
            </div>
        </div>
        
        <div class="nd1f" id="nd1f" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='nd1' or class='dip1' and semester='1'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>

        <div class="nd1s" id="nd1s" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='nd1' or class='dip1' and semester='2'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>


        <div class="nd2f" id="nd2f" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='nd2' or class='dip2' and semester='1'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>

        <div class="nd2s" id="nd2s" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='nd2' or class='dip2' and semester='2'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>


        <div class="hnd1f" id="hnd1f" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='hnd1' and semester='1'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>

        <div class="hnd1s" id="hnd1s" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='hnd1' and semester='2'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>


        <div class="hnd2f" id="hnd2f" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='hnd2' and semester='1'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>

        <div class="hnd2s" id="hnd2s" style="display: none;">
            <div class="cnt">
                <h1>Download PDF files</h1>
                <?php
                
                $query1="select * from documents where class='hnd2' and semester='2'";
                $res1=$conn->query($query1);
                while($row1 = $res1->fetch_assoc()){
                    ?>
                <a href="upload/<?php echo $row1['docName']; ?>" download="<?php echo $row1['docTitle'] .'-'. $row1['docName']; ?>" class="pdfs"><?php echo $row1['docTitle']; ?> <i class="fa fa-download" id="pdfsIcn"></i></a>
                <?php
                }
                ?>
                
            </div>
        </div>

    </div>

    <script src="../js_modules/main.js"></script>
    <script src="../j_query/jquery.js"></script>
</body>
</html>