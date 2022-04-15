<?php
class App{

    protected $controller="Home";
    protected $action="index";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();
        // Controller
        //use when test local
		// if(isset($arr))
        // if( file_exists("./controllers/".$arr[0].".php") ){
        //     $this->controller = $arr[0];
        //     unset($arr[0]);
        // }
        // require_once "./controllers/". $this->controller .".php";
        // $this->controller = new $this->controller;

        // // Action
		// if(isset($arr))
        // if(isset($arr[1])){
        //     if( method_exists( $this->controller , $arr[1]) ){
        //         $this->action = $arr[1];
        //     }
        //     unset($arr[1]);
        // }

        //use when deploy, 
        if(isset($arr))
        if( file_exists("./controllers/".$arr[1].".php") ){
            $this->controller = $arr[1];
            unset($arr[0]);
            unset($arr[1]);
        }
        require_once "./controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
		if(isset($arr))
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[2]) ){
                $this->action = $arr[2];
            }
            unset($arr[2]);
        }
        // Params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>