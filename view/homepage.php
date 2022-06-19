<?php
$title = 'Home';
ob_start();
?>

<img id="image_a" src="../assets/media/pictures/acc.jpg">

<div class="container">
    <div class="bloc_reservation">
        <div class="col-12">
            <form>

                <div class="form-group formulaire">
                    <label for="depart">Date d'arrivée</label>
                    <input type="date" name="depart" id="depart" value="13/04/2020">

                    <label for="retour">Date de départ</label>
                    <input type="date" name="retour" id="retour" value="14/04/2020">

                    <label for="adultes">Adultes</label>
                    <select name="adultes" id="adultes">
                        <option selected="selected">0 Adulte</option>
                        <option>1 Adulte</option>
                        <option>2 Adultes</option>
                        <option>3 Adultes</option>
                        <option>4 Adultes</option>
                        <option>5 Adultes</option>
                    </select>
                    <label for="enfants">Enfants</label>
                    <select name="enfants" id="enfants">
                        <option selected="selected">0 Enfant</option>
                        <option>1 Enfant</option>
                        <option>2 Enfants</option>
                        <option>3 Enfants</option>
                        <option>4 Enfants</option>
                        <option>5 Enfants</option>
                    </select>
                </div>

                <div class="button-submit">
                    <input type="submit" value="Réserver" name="recherche" id="recherche">
                </div>

            </form>

        </div>
    </div>
</div>


<div class="container text-center"><br>
    <div class="row">
        <div class="col-sm-3">
            <img src="../assets/media/pictures/img.jpg" class="img-responsive">
            <button class="button_reserv">Réserver</button>
        </div>
        <div class="col-sm-3">
            <img src="../assets/media/pictures/image2.jpg" class="img-responsive">
            <button class="button_reserv">Réserver</button>
        </div>
        <div class="col-sm-3">
            <img src="../assets/media/pictures/image4.jpg" class="img-responsive">
            <button class="button_reserv">Réserver</button>
        </div>
        <div class="col-sm-3">
            <img src="../assets/media/pictures/img.jpg" class="img-responsive">
            <button class="button_reserv">Réserver</button>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('layout.php'); ?>