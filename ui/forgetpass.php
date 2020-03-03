<?php
$conn = mysqli_connect("localhost","root","","studentInfo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    
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
        .wrapit {
            width: 40%;
            margin: auto;
            background-color: rgba(255,255,255,0.2);
            padding: 20px;
            margin-top: 40px;
            text-align: center;
        }
        
        .ftxt {
            width: 98%;
            height: 30px;
        }
        
    </style>
</head>
<body>
    <div>
        <div class="wrapit">
            <form method="post">
                <input type="text" name="regNo" class="ftxt" placeholder="Reg No" required><br><br>
                
                <input type="submit" name="fetch" class="btn btn-success" value="Submit">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="index.php">Back</a>
            </form>
        </div>
        
        <?php
        if(isset($_POST['fetch'])){
            $regNo = $_POST['regNo'];
            
            $q1="select * from students where regNo='$regNo'";
            $res1=$conn->query($q1);
            if(mysqli_num_rows($res1) == 1){
                $row1=$res1->fetch_assoc();
                ?>
        <div class="wrapit">
            <form method="post">
                <h4>Security question</h4>
                <p><?php echo $row1['secQues']; ?> ?</p>
                
                <input type="text" name="regNo" value="<?php echo $row1['regNo']; ?>" hidden>
                
                <h4>Security Answer</h4>
                <input type="text" name="Ans" class="ftxt" placeholder="Security answer" required><br><br>
                
                <input type="submit" name="verify" class="btn btn-primary" value="Verify">
            </form>
        </div>
        
        <?php
            }
        }
        
        if(isset($_POST['verify'])){
            $Ans = $_POST['Ans'];
            $regNo = $_POST['regNo'];
            
            $read="select * from students where regNo='$regNo' and secAns='$Ans'";
            $readRes=$conn->query($read);
            if(mysqli_num_rows($readRes) == 1){
                $readRow = $readRes->fetch_assoc();
                echo "<div class='wrapit'><br><br><br> <p>Your password is : <strong>". $readRow['password'] ."</strong></p></div>";
            }else{
                echo "<script>alert('Incorrect answer!!!');</script>";
            }
            
        }
        ?>
        
    </div>
</body>
</html>