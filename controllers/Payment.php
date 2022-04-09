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
        function PaymentDetailHistory(int $billId){
            $this->view("_Layout",[
                "Page"=>"PayMent/PaymentDetailHistory",
                "billDetail" =>$this->paymentModel->GetPaymentDetail($billId)
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