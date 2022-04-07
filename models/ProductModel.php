<?php
class ProductModel extends DB{
    function getProduct($type=""){
        // $query = "";
        // $result = "";
        // if($type="smartphone"){
            
        // }
        // else if($type="laptop"){
        //     $query = "SELECT * FROM product";
        // }
        // else if($type="accessory"){
        //     $query = "SELECT * FROM product";
        // }
        // else{
        //     $query = "SELECT * FROM product";
        //     $result = $this->excuteResult($query);
        // }
        $query = "SELECT * FROM product";
        if($type!="") $query = "SELECT * FROM product WHERE Type='$type'" ;
        $result = $this->excuteResult($query);
        return $result;
    }
    function getProductById($id){
        $query = "SELECT * FROM product WHERE ProductId='$id'";
        $result = $this->excuteResult($query,true);
        return $result;
    }
    function getEvalByProductId($id){
        $query = "SELECT * FROM evaluation WHERE ProductId='$id'";
        $result = $this->excuteResult($query);
        return $result;
    }
    function getDescByProductId($id){
        $query = "SELECT * FROM description WHERE ProductId='$id'";
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