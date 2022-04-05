<?php include_once 'header.php'?>
<?php
    if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['nbSandwitches']) and
        isset($_POST['adresse']) and isset($_POST['type']) and isset($_POST['ingredients'])){
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $nbSandwitches=htmlspecialchars($_POST['nbSandwitches']);
        $adresse=htmlspecialchars($_POST['adresse']);
        $type=htmlspecialchars($_POST['type']);
        $ingredients=$_POST['ingredients'];
        $total=$nbSandwitches > 10 ? 4*0.9*htmlspecialchars($nbSandwitches) : 4*htmlspecialchars($nbSandwitches);
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
    if (isset($_FILES['cin'])){
        if (file_exists($_FILES['cin']['tmp_name'])){
            move_uploaded_file($_FILES['cin']['tmp_name'], 'C:\Users\Utilisateur\Desktop\RT2 2021-2022\My Files\Sem2\Web\atelier php\uploads');
        }
    }
    phpinfo();
?>
<?php include_once 'footer.php'?>

