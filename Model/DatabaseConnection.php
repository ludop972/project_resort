<?php

namespace App\Model;

use PDO;

abstract class DatabaseConnection
{
    public static function getPDO(): PDO
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=dizalty_resort','root','');
        } catch(\Exception $e){
            echo 'Erreur : ' . $e->getMessage();
        }
        return $pdo;
    }
}