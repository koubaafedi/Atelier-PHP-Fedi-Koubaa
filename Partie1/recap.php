<?php include_once '../header.php' ?>
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
            $targetDir="uploads/";
            $fileType = $_FILES['fileToUpload']['type'];
            $array = explode('.', $_FILES['cin']['name']);
            $fileExtension = strtolower(end($array));
            //$targetFile=$targetDir.basename($_FILES['cin']['name']);
            $targetFile=$targetDir.uniqid().'.'.$fileExtension;
            move_uploaded_file($_FILES['cin']['tmp_name'], $targetFile);

    }
}

?>
<?php include_once '../footer.php' ?>

