<?php
use App\Model\DatabaseConnection;

require('../Controller/RoomController.php');
require('../Model/DatabaseConnection.php');

$getRooms = new RoomController(DatabaseConnection::getPDO());
$rooms = $getRooms->findAll();

$title = "Hebergement";
ob_start();
?>

<div class="container page_room">
<?php foreach($rooms as $room) : ?>

    <div class="container  bloc_room">
   
        <div class="row">
            <div class="col">
                <h2><?= ucfirst($room['title']) ?> <img class="little_img" src="../assets/media/pictures/hibiscus.png"></h2>
                <p><?= $room['description'] ?> <br><br> <b><?= round($room['price']) ?></b> €</p>
            </div>
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/media/pictures/image4.jpg" class="d-block" height="300" alt="room">
                            <div class="carousel-caption d-none d-md-block">
                                <button class="button_reserv">Réserver</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/media/pictures/room3.jpg" class="d-block" height="300" alt="room">
                            <div class="carousel-caption d-none d-md-block">
                                <button class="button_reserv">Réserver</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/media/pictures/img1.jpg" class="d-block" height="300" alt="room">
                            <div class="carousel-caption d-none d-md-block">
                                <button class="button_reserv">Réserver</button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
    

    <?php 
    $content = ob_get_clean();
    require("layout.php"); ?>