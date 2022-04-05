<?php
class RevenueModel extends DB{
    function getBill(){
        $query = "SELECT * FROM bill";
        $result = $this->excuteResult($query);
        return $result;
    }
}
?>