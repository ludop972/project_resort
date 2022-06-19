<?php

use App\Controller\CrudController;
use App\Model\Room;

require_once('../Model/Room.php');
require_once('CrudController.php');

class RoomController extends CrudController
{
    protected $table = 'room';
    protected $class = Room::class;

    /**
     * @return string
     */

    public function findByTitle(string $title)
    {
        /* Espace Réservé pour faire une vérification sur le form*/
        try {
            $query = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE title = :title');
            $query->execute(['title' => $title]);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $result = $query->fetchAll();
        } catch(Exception $e)
        {
            echo 'Information non trouvé';
        }
        
        return $result;
    }

    public function findByPrice(float $price)
    {
        /* Espace Réservé pour faire une vérification sur le form*/

        $query = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE price = :price');
        $query->execute(['price' => $price]);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        return $result;
    }
}