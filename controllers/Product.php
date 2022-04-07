<?php 
class Product extends Controller{
    private $productModel;
        function __construct()
        {
            $this->productModel = $this->model("ProductModel");
        }
        function addCart(){

        }
        function Accessory($productId=""){
            if($productId == ""){
                $accessoryArr = [];
                if(isset($_POST["Category"])){
                    $category = $_POST["Category"];
                    $deviceArr = json_decode($this->productModel->getProduct("accessory"),true);
                    for($i = 0;$i < sizeof($deviceArr);$i++){
                        for($j = 0;$j < sizeof($category);$j++){
                            if($deviceArr[$i]["BrandName"] == $category[$j]){
                                $accessoryArr[] = $deviceArr[$i];
                                break;
                            }
                        }
                    }
                }
                else{
                    $accessoryArr = json_decode($this->productModel->getProduct("accessory"),true);
                }
                $this->view("_Layout",[
                    "Page"=>"Product/Accessory",
                    "accessory" => $accessoryArr
                ]);
            }
            else{
                $this->view("_Layout",[
                    "Page"=>"Product/Product",
                    "product" => json_decode($this->productModel->getProductById($productId),true),
                    "eval" => json_decode($this->productModel->getEvalByProductId($productId),true),
                    "desc" => json_decode($this->productModel->getDescByProductId($productId),true)
                ]);
            }
        }
        function Laptop($productId = ""){
            if($productId == ""){
                $laptopArr = [];
                if(isset($_POST["Category"])){
                    $category = $_POST["Category"];
                    $deviceArr = json_decode($this->productModel->getProduct("laptop"),true);
                    for($i = 0;$i < sizeof($deviceArr);$i++){
                        for($j = 0;$j < sizeof($category);$j++){
                            if($deviceArr[$i]["BrandName"] == $category[$j]){
                                $laptopArr[] = $deviceArr[$i];
                                break;
                            }
                        }
                    }
                }
                else{
                    $laptopArr = json_decode($this->productModel->getProduct("laptop"),true);
                }
                $this->view("_Layout",[
                    "Page"=>"Product/Laptop",
                    "laptop" => $laptopArr
                ]);
            }
            else{
                $this->view("_Layout",[
                    "Page"=>"Product/Product",
                    "product" => json_decode($this->productModel->getProductById($productId),true),
                    "eval" => json_decode($this->productModel->getEvalByProductId($productId),true),
                    "desc" => json_decode($this->productModel->getDescByProductId($productId),true)
                ]);
            }
            
        }
        function Product($productId){
            $this->view("_Layout",[
                "Page"=>"Product/Product",
                "productModel" => $this->productModel->getProductById($productId)
            ]);
        }
        function Smart($productId = ""){
            if($productId == ""){
                $phoneArr = [];
                if(isset($_POST["Category"])){
                    $category = $_POST["Category"];
                    $deviceArr = json_decode($this->productModel->getProduct("smartphone"),true);
                    for($i = 0;$i < sizeof($deviceArr);$i++){
                        for($j = 0;$j < sizeof($category);$j++){
                            if($deviceArr[$i]["BrandName"] == $category[$j]){
                                $phoneArr[] = $deviceArr[$i];
                                break;
                            }
                        }
                    }
                }
                else{
                    $phoneArr = json_decode($this->productModel->getProduct("smartphone"),true);
                }
                $this->view("_Layout",[
                    "Page"=>"Product/Smart",
                    "smartphone" => $phoneArr
                ]);
            }
            else{
                $this->view("_Layout",[
                    "Page"=>"Product/Product",
                    "product" => json_decode($this->productModel->getProductById($productId),true),
                    "eval" => json_decode($this->productModel->getEvalByProductId($productId),true),
                    "desc" => json_decode($this->productModel->getDescByProductId($productId),true)
                ]);
            }
        }
}
?>