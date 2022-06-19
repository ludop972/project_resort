<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
<?php session_start()?>
    <nav class="navbar">
        <img id="logo" src="../assets/media/pictures/logo2.png" alt="logo">
        <ul>
            <li><a href="homepage.php"> Accueil</a></li>
            <li><a href="room.php"> Hébergement</a></li>
            <li><a href="contact.php"> Contact</a></li>
        </ul>
        <?php if(!isset($_SESSION['userId'])) { ?>
                <div class="d-flex">
                    <a href="register.php"><button class="btn btn-outline-primary m-2">Inscription</button></a>
                    <a href="login.php"><button class="btn btn-outline-success m-2">Connexion</button></a>
                </div>
                <?php } else { ?>
                    <div class="d-flex">
                        <a href="account.php"><button class="btn btn-outline-primary m-2">Mon espace personnel</button></a>
                        <a href="logout.php"><button class="btn btn-outline-danger m-2">Déconnexion</button></a>
                    </div>
                <?php } ?>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>

    
    <footer class="container-fluid text-center">

        <div class="wrapper">

            <img id="logo_white" src="../assets/media/pictures/logo.png" height="80">
            <ul>
                <li class="li_footer"><a href="">Qui sommes-nous?</a></li>
                <li class="li_footer"><a href="">Nous contacter</a></li>
                <li class="li_footer"><a href="">C.G.V</a></li>
                <li class="li_footer"><a href="">Mentions légales</a></li>
            </ul>

            <p class="copyright">Copyright @ CB 2022.Tous droits réservés</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>