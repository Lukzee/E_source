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
                <li><a href="cont.php">CONTACT US</a></li>
                <li id="hom"><a href="#">KNOW US</a></li>
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
        <div class="KnwUs">
            <h1>History Of The Department</h1>
            <img src="../images/dep.jpg" width="30%" height="25%" alt="">

            <p>Department of Computer Science was created first within School of General Studies In September 1986, as a serving department. The department continue to operate as such untill its relocation administratively to School of  Science and Technology asa full time status department, running National Diploma and Higher National Diploma in Computer Science.</p>

            <p>The Department first operate in a location behind Muhammadu Wabi Library, then together with UNESCO office. It was later moved to a temporal location at PTDF laboratory, pending completion of its permanent site.</p>

            <section id="HodsTable" class="table-style-container">
                <h3>The list of HOD from 1986 till Present</h3>

                <table class="table-style" border="1px">
                    <thead>
                        <tr>
                            <th class="td-style">Name</th>
                            <th class="td-style">From</th>
                            <th class="td-style">To</th>
                            <th class="td-style">Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Mr C.I. Okoye</td>
                            <td class="td-style">September 1986</td>
                            <td class="td-style">May 1993</td>
                            <td class="td-style">HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Mr I.I. Larson</td>
                            <td class="td-style">May 1993</td>
                            <td class="td-style">October 1993</td>
                            <td class="td-style">Acting HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Mr Ishaya</td>
                            <td class="td-style">October 1993</td>
                            <td class="td-style">May 1994</td>
                            <td class="td-style">Acting HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Hajiya Rakiya Mahdi</td>
                            <td class="td-style">May 1994</td>
                            <td class="td-style">November 2004</td>
                            <td class="td-style">Acting HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Malam Sani Usman</td>
                            <td class="td-style">November 2004</td>
                            <td class="td-style">November 2005</td>
                            <td class="td-style">Acting HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Malam Sani Usman</td>
                            <td class="td-style">November 2005</td>
                            <td class="td-style">February 2018</td>
                            <td class="td-style">HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Malam Sani Usman</td>
                            <td class="td-style">February 2018</td>
                            <td class="td-style">September 2018</td>
                            <td class="td-style">Elected HOD</td>
                        </tr>

                        <tr class="tr-style" style="background: #e4f6ff;">
                            <td class="td-style">Malam Ahmad Maidorawa</td>
                            <td class="td-style">September 2018</td>
                            <td class="td-style">Till Date</td>
                            <td class="td-style">Acting HOD</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
        </div>
    </div>
</body>
</html>