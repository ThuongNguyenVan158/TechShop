<?php
    class Home extends Controller{
        private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
        }
        function mainFunc(){
            $this->view("index",[
                "Page"=>"Home/index",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
    }
?>