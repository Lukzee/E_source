<?php
SESSION_START();

if($_SESSION['admin'] == ''){
    header("location: index.php");
}

$conn = mysqli_connect("localhost","root","","studentInfo");

if(isset($_POST['upload'])){
    $cTitle = $_POST['cTitle'];
    $doc = $_FILES['doc'];
    $class = $_POST['class'];
    $semester = $_POST['semester'];
    
    if(!empty($cTitle) and !empty($doc) and !empty($class)){
        if($semester != "default"){
            if($class != "default"){
                //document properties
                $doc_name = $doc['name'];
                $doc_temp = $doc['tmp_name'];
                $doc_size = $doc['size'];
                $doc_error = $doc['error'];

                //document extension
                $doc_ext = explode('.', $doc_name);
                $doc_ext = strtolower(end($doc_ext));

                //allowed files
                $allowed = array('pdf','txt','docx','doc');

                if(in_array($doc_ext, $allowed)){
                    if($doc_error === 0){
                        if($doc_size <= 2097152){
                            $doc_new_name = uniqid('', true) . '.' . $doc_ext;
                            $destination = 'upload/' . $doc_new_name;

                            if(move_uploaded_file($doc_temp, $destination)){
                                $query1 = "insert into documents values ('','$cTitle','$doc_new_name','$class','$semester')";
                                if($res=$conn->query($query1)){
                                    echo "<script>alert('file uploaded successfully...');</script>";
                                }else{
                                    echo "<script>alert('Error, something happen!!');</script>";
                                }
                            } else {
                                echo "<script>alert('Error, file uploading failed!!');</script>";
                            }
                        }else{
                            echo "<script>alert('Error, file exceeded the maximum size!!');</script>";
                        }
                    }else{
                        echo "<script>alert('Error, file currupted!!');</script>";
                    }
                }else{
                    echo "<script>alert('Error, invalid file type!!');</script>";
                }
            }else{
                echo "<script>alert('Select a valid class!!');</script>";
            }
        }else{
            echo "<script>alert('Select a valid semester!!');</script>";
        }
        
    }else{
        echo "<script>alert('fill all the required fields...');</script>";
    }   
    //echo "<script>alert('Yes');</script>";
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
    <style>
        img {
            border-radius: 50%;
        }
        
        .adpage {
            width: 80%;
            background-color: rgba(255,255,255,0.2);
            margin: auto;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div id="menu">
        <div id="bar">
            <ul>
                <li id="img" style="background-color:transparent;"><img src="../images/logo.jpg" width="100%" height="100%"></li>
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

    <div class="adpage">
        <form method="post" action="admin.php" enctype="multipart/form-data">
            <input type="text" name="cTitle" class="form-control" required placeholder="Course title"><br><br>
            
            <input type="file" name="doc" class="form-control" required><br><br>
            
            <p style="color:white;">Select class</p>
            <select name="class" class="form-control" required>
                <option value="default">Select Class</option>
                <option value="nd1">ND1</option>
                <option value="nd2">ND2</option>
                <option value="dip1">DIP1</option>
                <option value="dip2">DIP2</option>
                <option value="hnd1">HND1</option>
                <option value="hnd2">HND2</option>
            </select><br><br>
            
            <select name="semester" class="form-control" required>
                <option value="default">Select Semester</option>
                <option value="1">First</option>
                <option value="2">Second</option>
            </select><br><br>
            
            <input type="submit" name="upload" class="btn btn-success" value="Upload">
        </form>
    </div>
</body>
</html>