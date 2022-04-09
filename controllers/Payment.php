<?php 
class Payment extends Controller{
    private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("AccountModel");
            $this->paymentModel = $this->model("PaymentModel");
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
            if(!$this->isLoggedIn()){
                echo '<li><a href="../Home/Login"><i class="fa fa-user"></i>Đăng nhập</a></li>';
                die();
            }else{
                $User = $_SESSION["account"];
                $obj = json_decode($User,true);
            
            $this->view("_Layout",[
                "Page"=>"PayMent/PaymentHistory",
                "listbill" => $this->paymentModel->GetPaymentHistory($obj['Id'])
               
            ]);
            }
        }
        function PaymentMethod(){
            if(!$this->isLoggedIn()){
                echo '<li><a href="../Home/Login"><i class="fa fa-user"></i>Đăng nhập</a></li>';
                die();
            }else{
                $User = $_SESSION["account"];
                $obj = json_decode($User,true);
            
            $this->view("PayMent/PaymentMethod",[
                "bill"=>$this->paymentModel->GetPayment($obj['Id'])
            ]);
            }
        }
    }
?>