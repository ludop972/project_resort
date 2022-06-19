<?php ob_start(); ?>

<img id="image_c" src="../assets/media/pictures/accueil.jpg">

<div class="container bloc_contact">
    <div class="row">
        <div class="col-6">
            <div class="info">
                <img class="logo" src="../assets/media/pictures/logo2.png" alt="logo">
                <p>Contactez-nous et nous vous répondrons dans les 24 heures.</p>
                <p><span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Jarry</p>
                <p><span class="icon"><i class='fas fa-phone'></i></span> 0690 20 25 26</p>
                <p><span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span> dizalty.resort.com</p>
                <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d957.6665704753393!2d-61.55810771520539!3d16.237587292213192!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c1345d4a6b91c7f%3A0xa022e0dfcf1ed46b!2sJarry%2C%20Baie-Mahault%2C%20Guadeloupe!5e0!3m2!1sfr!2sfr!4v1655407272734!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        <div class="col-6">
            <div class="bloc_form">
                <form id="form2" method="" action="">
                    <h1 class="text-center">Contactez-nous</h1>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nom" placeholder="Nom" /><br />
                        </div>
                        <div class="col">
                            <input type="text" name="prenom" placeholder="Prénom" /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="tel" name="number" placeholder="tel" /><br />
                        </div>
                        <div class="col">
                            <input type="text" name="nom" placeholder="email" /><br />
                        </div>
                    </div>
                    <textarea></textarea></br>
                    <input class="valider" type="submit" name="valider" value="Connexion" style="margin-top: 30px;" />
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container text-center"><br>
    <div class="row">

    </div>
</div>
<?php $content = ob_get_clean();
require("layout.php"); ?>