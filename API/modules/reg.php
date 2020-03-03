<?php
    class reg_User {
        // db stuff
        private $conn;
        private $reg_Table = 'students';

        //reg propts
        public $regNo;
        public $class;
        public $password;
        public $ques;
        public $ans;

        // construct with db
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // register user
        public function Register() {
            // create query
            $ql = 'INSERT INTO ' . $this->reg_Table . '
            SET
                regNo = :regNo,
                class = :class,
                password = :password,
                secQues = :ques,
                secAns = :ans';

            // prepare statement
            $stmt = $this->conn->prepare($ql);

            // clean data
            $this->regNo = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->regNo))));

            $this->class = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->class))));

            $this->password = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->password))));
            
            $this->ques = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->ques))));
            
            $this->ans = htmlspecialchars(htmlentities(strip_tags(mysql_real_escape_string($this->ans))));

            // bind data
            $stmt->bindParam(':regNo', $this->regNo);
            $stmt->bindParam(':class', $this->class);
            $stmt->bindParam(':password', $this->password);
            $stmt->bindParam(':ques', $this->ques);
            $stmt->bindParam(':ans', $this->ans);

            // exec query
            if($stmt->execute()) {
                return true;
            }

            // print error
            printf('Error: %s.\n', $stmt->error);

            return false;
        }
    }