<?php

use App\Model\DatabaseConnection;

require('../Controller/UserController.php');
require('../Model/DatabaseConnection.php');

$title = "Inscription";
$notification = null;

if (!empty($_POST)) {
    $userInDatabase = new UserController(DatabaseConnection::getPDO());
    $addAndGetUsersErrors = $userInDatabase->addUser($_POST['name'], $_POST['email'], $_POST['password'], $_POST['password_confirm'],$_POST['telNumber']);
    $notification = $addAndGetUsersErrors;
    if (!empty($notification['success'])) {
        echo '<div class="alert alert-success text-center">' .
            htmlspecialchars($notification['success']) .
            '</div>';
    }
}

ob_start();
?>
<h1 class="text-center">Inscription</h1>

<form method="post" action="">
    <input type="text" name="name" placeholder="Nom complet" class="form-control mt-3" required>

    <input type="text" name="email" placeholder="Email" class="form-control mt-3" required>
    <div class="text-danger"><?= $error = isset($notification['email']) ? $notification['email'] : ''; ?></div>

    <input type="password" name="password" placeholder="Mot de passe" class="form-control mt-3" required>
    <div class="text-danger mt-2">
            <?= $error = isset($notification['samePassword']) ? $notification['samePassword'] : ''; ?>
            <?= $error = isset($notification['password']) ? $notification['password'] : ''; ?>
        </div>

    <input type="password" name="password_confirm" placeholder="Confirmer Mot de passe" class="form-control mt-3" required>
    <div class="text-danger mt-2">
            <?= $error = isset($notification['samePassword']) ? $notification['samePassword'] : ''; ?>
            <?= $error = isset($notification['password']) ? $notification['password'] : ''; ?>
        </div>

    <input type="tel" name="telNumber" class="form-control mt-3" placeholder="Votre numéro de mobile : 0123456789" pattern="[0-9]{10}" required>
    <button type="submit" class="btn btn-success mt-3">Valider</button>
</form>
<p class="d-flex justify-content-end"><a href="login.php">Déjà un compte</a> ? </p>
<?php 
$content = ob_get_clean();
require("layout.php"); 
?>