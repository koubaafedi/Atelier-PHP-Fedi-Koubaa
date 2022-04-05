<?php include_once 'header.php'?>
<div class="container ">
    <form action="recap.php" method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="nbSandwitches" class="form-label">Nombe de sandwitchs :</label>
            <input type="number" class="form-control" id="nbSandwitches" name="nbSandwitches">
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse :</label>
            <textarea class="form-control" id="adresse" name="adresse"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Type du sandwitch :</label>
            <br>
            <input type="radio" id="viande" name="type" value="viande">
            <label for="viande" >Viande</label>
            <br>
            <input type="radio" id="poulet" name="type" value="poulet">
            <label for="poulet" >Poulet</label>
            <br>
            <input type="radio" id="escalope" name="type" value="escalope">
            <label for="escalope" >escalope</label>
        </div>

        <div class="mb-3">
            <label class="form-label">Les Ingrédients à ajouter :</label>
            <br>
            <input type="checkbox" id="harissa" name="ingredients[]" value="harissa">
            <label  for="harissa">Harissa</label>
            <br>
            <input type="checkbox" id="salade" name="ingredients[]" value="salade">
            <label  for="salade">Salade</label>
            <br>
            <input type="checkbox" id="mayo" name="ingredients[]" value="mayo">
            <label  for="mayo">Mayo</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include_once 'footer.php'?>
