<?php ob_start();
use App\Model\DatabaseConnection;
use App\Model\User;

require('../Controller/UserController.php');
require('../Model/DatabaseConnection.php');

$error = null;
$errorPassword = null;
$title = "Connexion";
$user = new User;

if(!empty($_POST))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $em = new UserController(DatabaseConnection::getPDO());
        try {
            $userInDatabase = $em->findByEmail($_POST['email']);
            if(!$userInDatabase){
                $error = "L'adresse mail  et le mot de passe renseigné ne correspondent pas avec ceux que vous avez utilisée lors de votre inscription";
            } elseif(password_verify($_POST['password'], $userInDatabase->getPassword()) === true) {
                    session_start();
                    $_SESSION['userId'] = $userInDatabase->getId();
                    $_SESSION['username'] = $userInDatabase->getName();
                    header("Location: homepage.php");
                    exit();
                } else {
                    $errorPassword = "Le mot de passe renseignée ne correspond pas avec celui que vous avez utilisé lors de l'inscription";
                }
        } catch (Exception $e) {
        }
    }
}

if($error) :
    ?>
<div class="alert alert-danger"><?= nl2br(htmlentities($error)) ?></div>
<?php endif ?>

<h1 class="text-center">Se connecter</h1>

<form method="post" action="">
  <div class="mt-5">
    <label for="email" class="form-label">Adresse Mail</label>
    <input type="email" class="form-control" name="email" placeholder="Votre email de connexion" required>
  </div>
  <div class="mt-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="password" placeholder="Votre mot de passe de connexion" required>
      <div class="text-danger"><?= nl2br(htmlentities($errorPassword)) ?></div>
  </div>
  <button type="submit" class="btn btn-primary mt-5">Valider</button>
</form>

<?php $content = ob_get_clean();
require('layout.php') ?>