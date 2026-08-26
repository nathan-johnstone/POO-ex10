<?php
namespace View;

Class View{
    //ATTRIBUTS
    private ViewFooter $viewFooter;
    private ViewHeader $viewHeader;
    private ?array $data;
    private ?string $buffer;

    //CONSTRUCTEUR
    public function __construct(string $titre = "Titre de la page", string $script = ""){
        $this->viewHeader = new ViewHeader($titre, $script);
        $this->viewFooter = new ViewFooter();
    }

    //GETTER ET SETTER
    public function setData(array $data):self{
        $this->data = $data;
        return $this;
    }


    public function getData(){
        return $this->data;
    }

    // public function __get(string $name):?array{
    //     switch ($name){
    //         case 'data':
    //             return $this->data;
    //         default:
    //             return null;
    //     }
    // }

    public function __get(string $name):array{
        if($name == 'data'){
            return $this->data;
        }
            return [];
    }

    public function setBuffer(string $buffer):self{
        $this->buffer = $buffer;
        return $this;
    }

    //METHODS
    public function launchBuffer():self{
        return $this;
    }

    public function display(){
        echo $this->buffer;
    }

    public function displayAll():void{
        $this->viewHeader->launchBuffer()->display();
        $this->launchBuffer()->display();
        $this->viewFooter->launchBuffer()->display();
    }
}
