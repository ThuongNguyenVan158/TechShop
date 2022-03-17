<?php
    class Home extends Controller{
        private $homeModel;
        private $accountModel;

        function __construct()
        {
            $this->accountModel = $this->model("AccountModel");
            $this->homeModel = $this->model("HomeModel");
        }
        function mainFunc(){
            $this->view("_Layout",[
                "Page"=>"Home/index",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function Login(){
            if(isset($_POST)) {
                

                $this->view("Home/Login",[
                ]);
            }
            
        }
        
        function Register(){
            if(isset($_POST)) {
                $name = $this->get_POST('UserName');
                $pass =$this->get_POST('Password');
                $repass = $this->get_POST('RePassword');
                $fullname = $this->get_POST('FullName');
                $phonenumber = $this->get_POST('PhoneNumber');
                $email = $this->get_POST('Email');
                $birthday = $this->get_POST('Birthday');
                $gender = $this->get_POST('Gender');

                $account = [$name, $pass, $fullname, $phonenumber, $email, $birthday, $gender];
                
                $err = "";
                if($pass != $repass)
                {
                    $err = "Mật khẩu không khớp";
                }
                $issuccess = true;
                $issuccess = $this->accountModel->register($name, $pass, $email, $phonenumber, $fullname, $gender, $birthday, 1, 0);
                if($issuccess){
                    header('Location: Login');
                }
                else{
                $this->view("Home/Register",[
                    "err" => $err,
                    "acc" =>$account
                ]);
                }
            }
        }
    }
?>