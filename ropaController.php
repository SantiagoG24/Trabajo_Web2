<?php
require_once 'ropaModel.php';
require_once 'ropaView.php';
class ropaController{
    private $model;
    private $view;
    public function __construct()
    {
        $this->model=new ropaModel();
        $this->view=new ropaView();
    }
    function mostrarRopaPorCategoria(){
        if(!isset($_POST['categoria'])||(empty($_POST['categoria']))){
            $this->view->MostrarError();
        }
    $valor =$_POST['categoria'];
    }
}