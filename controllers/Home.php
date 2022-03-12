<?php
    class Home extends Controller{
        function mainFunc(){
            $this->view("index",[
                "Page"=>"Home/index"
            ]);
        }
    }
?>