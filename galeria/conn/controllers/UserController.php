<?php

include './core/Database.php';

class UserController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function store($request)
    {
        isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;
        $password = $request['password'];

        $query = $this->db->pdo->prepare('INSERT INTO users (username, password, is_admin) VALUES (:name, :password, :is_admin)');
        $query->bindParam(':name', $request['fullName']);
        $query->bindParam(':password', $password);
        $query->bindParam(':is_admin', $isAdmin);
        $query->execute();

        return header('Location: ./login.php');
    }

   
}
