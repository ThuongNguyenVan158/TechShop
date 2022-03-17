<?php 
class Admin extends Controller{
    private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
        }
        function Account(){
            $this->view("_Admin",[
                "Page"=>"Admin/Account",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function AdminProduct(){
            $this->view("_Admin",[
                "Page"=>"Admin/AdminProduct",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function Revenue(){
            $this->view("_Admin",[
                "Page"=>"Admin/Revenue",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
}
?>