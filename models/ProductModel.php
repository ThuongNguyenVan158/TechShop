<?php
class ProductModel extends DB{
    function getProduct(){
        $query = "SELECT * FROM product";
        $result = $this->excuteResult($query);
        return $result;
    }
    function insertProduct($Name, $Producer, $Price, $Status, $ImgUrl, $Rating, $Special, $SellOff, $TimeSellOff, $OldPrice){
        $query = "INSERT INTO product(Name, Producer, Price, Status, ImgUrl, Rating, Special, SellOff, TimeSellOff, OldPrice) 
        VALUES ('$Name', '$Producer', '$Price','$Status', '$ImgUrl', '$Rating', '$Special', '$SellOff', '$TimeSellOff', '$OldPrice')";
        $result = $this->excute($query);
        return $result == "true";
    }
}
?>