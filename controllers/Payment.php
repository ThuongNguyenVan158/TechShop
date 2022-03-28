<?php 
class Payment extends Controller{
    private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("AccountModel");
        }
        function index(){
            $this->view("_Layout",[
                "Page"=>"PayMent/Payment",
                
            ]);
        }
        function PaymentDetailHistory(){
            $this->view("_Layout",[
                "Page"=>"PayMent/PaymentDetailHistory",
            ]);
        }
        function PaymentHistory(){
            $this->view("_Layout",[
                "Page"=>"PayMent/PaymentHistory",
               
            ]);
        }
        function PaymentMethod(){
            $this->view("PayMent/PaymentMethod"
               );
        }
}
?>