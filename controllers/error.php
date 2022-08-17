<?php

class Errores extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->error();
        //echo "Error al cargar recursos";
    }
    function error()
    {
        //require_once 'views/error.php';

        $this->view->titlepage = '404 Error Page';
        $this->view->render('errores/index');
    }
}
