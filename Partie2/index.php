<?php
if (isset($_POST['vote']) and isset($_POST['reponse'])){
    if (!isset($_COOKIE['vote']) and !isset($_COOKIE['reponse'])){
        setcookie('vote', $_POST['vote'], time() + 120);
        setcookie('reponse', $_POST['reponse'], time() + 120);
        unset($_POST['vote']);
        unset($_POST['reponse']);
        include '../header.php';
    }else if(isset($_COOKIE['vote']) and isset($_COOKIE['reponse'])){
        include '../header.php';
        ?>
        <div class=" alert alert-danger" role="alert">
            <div class="card">
                <h5 class="card-header">Attetion!! Vous avez deja votez ! Attendez 2 min</h5>
                <div class="card-body">
                    <h5 class="card-title">Recap : Vous trouvez que le cours PHP est <?= $_COOKIE['vote']?>.</h5>
                    <p class="card-text">Vous avez dit que :"<?=$_COOKIE['reponse']?>"</p>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
<div class="mx-0 mx-sm-auto">
    <div class="card text-white mb-3 mx-auto" style="width: 25rem;">
        <form action="" method="post">
            <div class="card-body px-2">

                <p class="text-center"><strong>Comment évaluez-vous le cours PHP:</strong></p>

                <div class="pb-3 text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="Bon" name="vote" value="Bon" checked>
                        <label class="form-check-label" for="Bon">Bon</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="Moyen" name="vote" value="Moyen">
                        <label class="form-check-label" for="Moyen">Moyen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="Mauvais" name="vote" value="Mauvais">
                        <label class="form-check-label" for="Mauvais">Mauvais</label>
                    </div>
                </div>
                <br>
                <p class="text-center"><strong>Que pourrions-nous améliorer ?</strong></p>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="reponse" name="reponse" rows="4" placeholder="Ecrire Içi !!"
                              required></textarea>
                </div>


            </div>
            <div class="card-footer text-end">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>

<?php

include '../footer.php' ?>
