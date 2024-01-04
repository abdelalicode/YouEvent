<?php

namespace App\Controller;
use App\models\User;

class AuthController {
  
    public function index(){

        $obj= new User();
        $users=$obj->getAllUsers();
        include_once __DIR__ . '/../../View/index.php';

    }

}