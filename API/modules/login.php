<?php

class login {
    // db stuff
    private $conn;
    private $table = 'students';
    private $admintable = 'admin';

    //login propts
    public $regNo;
    public $pass;
    public $usertype;

    // construct with db
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // get posts
    public function login_user() {
        //check if the user is admin
        if($this->usertype == "admin"){
            $ql = 'SELECT
                * 
            FROM 
                ' .$this->admintable. ' 
            WHERE
                user = ?
            AND 
                pass = ?';

            // prepare statmnt
            $stmt = $this->conn->prepare($ql);

            // clean data
            $this->regNo = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->regNo))));
            $this->pass = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->pass))));
            
            // bind data
            $stmt->bindParam(1, $this->regNo);
            $stmt->bindParam(2, $this->pass);

            // exec query
            $stmt->execute();

            if($stmt->rowCount() == 1) {
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION['admin'] = $row['id'];
                    
                    echo '<span class="true">ACCESS GRANTED <i class="fa fa-thumbs-up"> </i> </span>';
                }
            } else {
                echo '<span class="false">ACCESS DENIED <i class="fa fa-user-times"> </i> </span>';
            }
        }else{
            //if the user is student
            $ql = 'SELECT
                * 
            FROM 
                ' .$this->table. ' 
            WHERE
                regNo = ?
            AND 
                password = ?';

            // prepare statmnt
            $stmt = $this->conn->prepare($ql);

            // clean data
            $this->regNo = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->regNo))));
            $this->pass = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->pass))));

            // bind data
            $stmt->bindParam(1, $this->regNo);
            $stmt->bindParam(2, $this->pass);

            // exec query
            $stmt->execute();

            if($stmt->rowCount() == 1) {
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION['id'] = $row['id'];

                    echo '<span class="true">ACCESS GRANTED <i class="fa fa-thumbs-up"> </i> </span>';
                }
            } else {
                echo '<span class="false">ACCESS DENIED <i class="fa fa-user-times"> </i> </span>';
            }
        }
    }
}
