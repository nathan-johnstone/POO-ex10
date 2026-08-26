<?php
namespace Model;

use Model\Model;
use PDO;
use EXCEPTION;

class ModelArticle extends Model{
    //ATTRIBUT
    private ?int $id;
    private ?string $title;
    private ?string $content;
    private ?string $createdAt;
    private ?string $editedAt;
    private ?string $author;

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function findAll():?array{
        try{
            $req = $this->getBDD()->prepare('SELECT a.id, a.title, a.content, a.created_at, a.edited_at, u.pseudo FROM article a INNER JOIN user u ON u.id = a.user_id');
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
}
