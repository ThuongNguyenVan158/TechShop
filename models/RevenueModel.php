<?php
class RevenueModel extends DB{
    function getBill($date){
        $query = "SELECT * FROM bill
        WHERE DateCreateBill LIKE '$date%' and PaymentMethod is not null
        ";
        $result = $this->excuteResult($query);
        return $result;
    }
    function getNumberBill($date){
        $query = "SELECT Count(*) as numofbill FROM bill
        WHERE DateCreateBill LIKE '$date%' and PaymentMethod is not null
        ";
        $result = $this->excuteResult($query);
        return $result;
    }
    function getTotalOfMonth($date){
        $query = "SELECT SUM(TotalPrice) as Total FROM bill
        WHERE DateCreateBill LIKE '$date%' and PaymentMethod is not null
        ";
        $result = $this->excuteResult($query);
        return $result;
    }
    function getBillBetween($date1, $date2){
        $date = strtotime("+1 day", strtotime($date2));
        $date3 = date("Y-m-d", $date);
        $query = "SELECT * FROM bill
        WHERE DateCreateBill >='$date1%' and DateCreateBill<= '$date3%' and PaymentMethod is not null
        ";
        $result = $this->excuteResult($query);
        return $result;
    }
}
?>