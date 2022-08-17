<?php
require_once 'controllers/error.php';
class App
{
    function __construct()
    {
    
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        //eliminar los espacios en blanco
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        // var_dump($url);
        $fileController = 'controllers/' . $url[0] . '.php';
        if (file_exists($fileController)) {
            require_once $fileController;
            $conotroller = new $url[0];
            if (isset($url[1])) {
                $conotroller->{$url[1]}();
            }
        } else {
            $conotroller = new Errores();
        }
    }
}
