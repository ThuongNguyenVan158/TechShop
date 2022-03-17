<?php
    class Home extends Controller{
        private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
        }
        function mainFunc(){
            $this->view("_Layout",[
                "Page"=>"Home/index",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function Login(){
            $this->view("Home/Login",[
            ]);
        }
        function Register(){
            $this->view("Home/Register",[
            ]);
        }
    }
?>