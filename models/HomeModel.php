<?php
class HomeModel extends DB{
    function getProduct(){
        $qr = "SELECT * FROM product";
        $rows = mysqli_query($this->con,$qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }
    function register($name, $pass, $fullname, $phonenumber, $email, $birthday, $gender){

    }
}
?>