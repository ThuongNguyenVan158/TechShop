<?php
class HomeModel extends DB{
    function getProduct(){
        $qr = "SELECT * FROM product";
        $rows = mysqli_query($this->con,$qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return $mang;
    }
}
?>