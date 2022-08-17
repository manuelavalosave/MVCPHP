<?php
class View{
    function __construct(){
      
    }
    public function render($name, $noInclude = false){
        // if ($noInclude == false) {
        //     require 'views/header.php';
        // }
        require 'views/' . $name . '.php';
        // if ($noInclude == false) {
        //     require 'views/footer.php';
        // }
    }
}