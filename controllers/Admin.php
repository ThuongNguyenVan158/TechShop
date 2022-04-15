<?php 
class Admin extends Controller{
    private $productModel;
    public $accountModel;
        function __construct()
        {
            $this->accountModel = $this->model("AccountModel");
            $this->productModel = $this->model("ProductModel");
            $this->revenueModel = $this->model("RevenueModel");
        }
        function Account(){
            if(isset($_POST["UserName"])){
                $name = $this->get_POST('UserName');
                $pass =$this->get_POST('Password');
                $repass = $this->get_POST('RePassword');
                $fullname = $this->get_POST('FullName');
                $email = $this->get_POST('Email');

                $account = [$name, $pass, $fullname, $email];
                $err = "";
                if($pass != $repass){
                    $err= "Mật khẩu không khớp";
                }
                $isSuccess = false;
                if($name && $pass && $fullname && $email && $err ==""){
                    $isSuccess = $this->accountModel->register($name, $pass, $email, 0, $fullname, 1,'2001-02-10', 1, 1);
                }
                if($isSuccess){
                    $this->view("_Admin",[
                        "Page"=>"Admin/Account",
                        "accountlist" =>$this->accountModel->getAllAccount()
                        // "acc" => []
                    ]);
                }else{
                    $this->view("_Admin",[
                        "Page"=>"Admin/Account",
                        "acc" => $account,
                        "err" =>$err,
                        "accountlist" =>$this->accountModel->getAllAccount()
                    ]);
                    die();
                }
            }
            $this->view("_Admin",[
                "Page"=>"Admin/Account",
                "accountlist" =>$this->accountModel->getAllAccount()
            ]);
        }
        function AdminProduct(){
            if(isset($_POST["Name"])){
                $name = $this->get_POST('Name');
                $status =$this->get_POST('Status');
                $producer = $this->get_POST('Producer');
                $price = $this->get_POST('Price');
                $special = $this->get_POST('Special');
                $imgUrl = $this->get_POST('ImgUrl');
                
                $isSuccess = false;
                if($name && $status && $producer && $price && $special && $imgUrl ){
                    $isSuccess = $this->productModel->insertProduct($name, $producer, $price, $status, $imgUrl, 5, $special, 1, '2001-02-10', 1000);
                }
                if($isSuccess){
                    $this->view("_Admin",[
                        "Page"=>"Admin/AdminProduct",
                        "productlist" =>$this->productModel->getProduct() 
                    ]);
                }else{
                    $this->view("_Admin",[
                        "Page"=>"Admin/AdminProduct",
                        "productlist" =>$this->productModel->getProduct()
                    ]);
                    die();
                }
            }

            $this->view("_Admin",[
                "Page"=>"Admin/AdminProduct",
                "productlist" =>$this->productModel->getProduct()
            ]);
        }
        function Revenue(){
            $this->view("_Admin",[
                "Page"=>"Admin/Revenue",
                "revenuelist" => $this->revenueModel->getBill()
            ]);
        }
}
?>