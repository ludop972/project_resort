<?php
require('CrudController.php');
require('../Model/User.php');

use App\Controller\CrudController;
use \App\Model\User;

class UserController extends CrudController
{
    protected $table = 'user';
    protected $class = User::class;

    public function findByEmail(string $email)
    {
        $query = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE email = :email');
        $query->execute(['email' => $email]);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        return $result;
    }

    public function findByName(string $name)
    {
        $query = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE name = :name');
        $query->execute(['name' => $name]);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        return $result;
    }

    public function addUser( string $username, string $email, string $password, string $confirmPassword, int $telNumber)
    {   
        $pattern = '^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^';
        $notifications = [];

            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (!empty($password) && !empty($confirmPassword)) {
                    if ($password === $confirmPassword) {
                        if (preg_match($pattern,$password)) {
                                $emailInDatabase = $this->findByEmail($email);
                                if ($emailInDatabase !== $email) {
                                    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);                                   
                                    try{
                                        
                                        $query = $this->pdo->prepare("INSERT INTO {$this->table} (name,email,password,tel_number) VALUES (:name,:email,:password,:tel_number)");
                                        $query->execute([
                                            'name' => $username,
                                            'email' => $email,
                                            'password' => $passwordHashed,
                                            'tel_number' => $telNumber
                                        ]);                                  
                                        $notifications['success'] = "Merci d'avoir créé un compte sur notre site.";
                                    } catch(PDOException $e) {
                                        $notifications['email']  = 'L\'email renseigné existe déjà !';
                                    } 
                                } 
                        } else {
                            $notifications['password'] = "Le mot de passe ne respecte pas les critères de sécurité.";
                        }
                    } else {
                        $notifications['samePassword'] = "Les mots de passe doivent être identique !";
                    }
                }
            }
        return $notifications;
    }
}