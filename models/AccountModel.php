<?php
    class AccountModel extends DB{
        use tool;
        
        public function register($name, $pass, $email, $phonenumber, $fullname, $gender, $birthday, $point =1, $admin =0){
            $isExistAcc = $this->checkExistEmail($email);
            if($isExistAcc){
                return false;
            }
            $pass = $this->getScurityHash($pass);
            $query = "INSERT INTO customer(UserName, Password, Email, PhoneNumber, FullName,Gender, Point, Admin,BirthDay) 
            VALUES ('$name', '$pass', '$email','$phonenumber', '$fullname', '$gender', '$point', '$admin', '$birthday')";
            $result = $this->insert($query);
            return $result;
        }

        public function checkExistEmail($email){
            $query = "SELECT * FROM customer WHERE Email = '$email'";
            $result = $this->select($query);
            return $result;
       }

       public function login($username, $password){
           
       }
    }
?>