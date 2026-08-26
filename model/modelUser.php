<?php
namespace Model;

use Model\Model;
use PDO;
use EXCEPTION;

class ModelUser extends Model{
    //ATTRIBUTS
    private ?int $id;
    private ?string $pseudo;
    private ?string $email;
    private ?string $password;
    private ?string $createdAt;
    private ?string $role;

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function findAll():?array{
        try{
            $req = $this->getBDD()->prepare('SELECT u.id, u.pseudo, u.email, u.password, u.created_at, r.role FROM user u INNER JOIN role r ON r.id = u.role_id');
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
}
