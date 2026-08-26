<?php
namespace Controller;

use Model\Model;
use View\View;

class Controller{
    //ATTRIBUTS
    private Model $model;
    private View $view;

    //CONSTRUCTOR
    public function __construct(Model $model, View $view){
        $this->model = $model;
        $this->view = $view;
    }

    //GETTER ET SETTER

    //METHODS
    public function render():void{
        $data = $this->model->findAll();
        $this->view->setData($data)
            ->displayAll();
    }
}
