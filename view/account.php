<?php
$welcome = null;
if(isset($_SESSION['username'])){ 
    $welcome = "Bienvenue " . ucfirst(htmlspecialchars($_SESSION['username'])) . " dans votre espace personnel"; 
}
ob_start();
?>
<h1 class="text-center"><?= $welcome ?></h1>

<p class="mt-5 text-center"> - ici il y aura toutes les réservations faites
    (donc une liste des réservations) <br>
    - elles auront un statut payé ou non <br>
    -on pourra éventuellement donné la possibilité a l'user d'annuler la résa
</p>

<?php $content = ob_get_clean();
require('layout.php') ?>