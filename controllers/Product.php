<?php 
class Product extends Controller{
    private $homeModel;
        function __construct()
        {
            $this->homeModel = $this->model("HomeModel");
        }
        function Accessory(){
            $this->view("_Layout",[
                "Page"=>"Product/Accessory",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function Laptop(){
            $this->view("_Layout",[
                "Page"=>"Product/Laptop",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function Product(){
            $this->view("_Layout",[
                "Page"=>"Product/Product",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
        function Smart(){
            $this->view("_Layout",[
                "Page"=>"Product/Smart",
                "homeModel" => $this->homeModel->getProduct()
            ]);
        }
}
?>