<?php

include './core/Database.php';

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $username = $request['username'];
        $password = $request['password'];
        $query = $this->db->pdo->prepare("SELECT id,username,password,is_admin FROM users WHERE $username = :username");
        $query->bindParam(':username', $username);
        $query->execute();

        $user = $query->fetch();

        if(password_verify($password, $user['password']) ){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = $user['is_admin'];

            header("Location: ../index-1.php");
        }else{
            echo "no such user";
        }
    }
}
