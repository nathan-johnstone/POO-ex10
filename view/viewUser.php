<?php
namespace View;

class ViewUser extends View{
    //ATTRIBUT

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function launchBuffer():self{
        ob_start();
?>
            <main>
                <h1>Liste des utilisateurs</h1>
                <ul>
<?php  
                foreach($this->getData() as $row){
?>
                    <li>Pseudo : <?= $row['pseudo'] ?> - Email : <?= $row['email'] ?> - Role : <?= $row['role'] ?></li>
<?php    
                }
?>
                </ul>
            </main>
<?php
        $this->setBuffer(ob_get_clean());
        return $this;
    }
}
