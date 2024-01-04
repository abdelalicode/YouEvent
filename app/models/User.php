<?php
namespace App\models;

use App\models\Database;
use PDO;

class User {
    public $nom;
    public $prenom;

   
    public function getAllUsers() {
        $db = Database::getInstance();
            $query = "SELECT * FROM users";
            $stmt = $db->query($query);
            $users = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $users;
    
    }
}
