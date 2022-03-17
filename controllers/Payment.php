<?php 
class Payment extends Controller{
    private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
        }
        function mainFunc(){
            $this->view("_Layout",[
                "Page"=>"PayMent/Payment",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function PaymentDetailHistory(){
            $this->view("_Layout",[
                "Page"=>"PayMent/PaymentDetailHistory",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function PaymentHistory(){
            $this->view("_Layout",[
                "Page"=>"PayMent/PaymentHistory",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function PaymentMethod(){
            $this->view("PayMent/PaymentMethod"
               );
        }
}
?>