<?php include_once 'header.php'?>
<?php
    if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nbSandwitches']) and
        isset($_POST['adresse']) and isset($_POST['type']) and isset($_POST['ingredients'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $nbSandwitches=$_POST['nbSandwitches'];
        $adresse=$_POST['adresse'];
        $type=$_POST['type'];
        $ingredients=$_POST['ingredients'];
        $total=$nbSandwitches > 10 ? 4*0.9*$nbSandwitches : 4*$nbSandwitches;
        ?>
        <div class="card text-white bg-primary mb-3 mx-auto" style="width: 18rem;">
            <div class="card-header">
                Récap de la Commande
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom: <?=$nom?></li>
                <li class="list-group-item">Prénom: <?=$prenom?></li>
                <li class="list-group-item">Nombre de Sandwich: <?=$nbSandwitches?></li>
                <li class="list-group-item">Adresse: <?=$adresse?></li>
                <li class="list-group-item">Type du Sandwitch: <?= $type?></li>
                <li class="list-group-item">Les Ingrédients à ajouter: <br> <?php foreach ($ingredients as $ingredient) echo $ingredient.' / ';?></li>
            </ul>
            <div class="card-header">
                Total = <?=$total?>
            </div>
        </div>
        <?php
    }
?>
<?php include_once 'footer.php'?>

