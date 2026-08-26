<?php
namespace View;

class ViewArticle extends View{
    //ATTRIBUT

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function launchBuffer():self{
        ob_start();
?>
            <main>
                <h1>Liste des Articles</h1>
                <ul>
<?php
                    foreach($this->data as $row){
?>
                        <article>
                            <h2> <?= $row['title'] ?></h2>
                            <h3>By : <?= $row['pseudo'] ?></h3>
                        </article>
<?php
                    }
?>
                </ul>
            </main>
<?php
        $this->buffer = ob_get_clean();
        return $this;
    }
}
?>
