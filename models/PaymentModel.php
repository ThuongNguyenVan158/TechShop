<?php
class PaymentModel extends DB{
    function GetPaymentHistory(int $id){
        $query = " SELECT * 
        FROM bill 
        WHERE CustomerId = '$id' AND PaymentMethod != null AND PaymentMethod != ''
        ORDER BY DateCreateBill DESC
        ";
        $result = $this->excuteResult($query);
        return $result;
    }
    function GetPayment(int $id){
        $query = "SELECT * FROM bill
                Where CustomerId= '$id' and (PaymentMethod=null or PaymentMethod='')";
        $result = $this->excuteResult($query, true);
        return $result;
    }
    function GetPaymentDetail(int $billId){
        $query = "SELECT * FROM billproduct
        Where BillId = '$billId'";
        $result = $this->excuteResult($query);
        return $result;
    }
}
?>