<?php include_once '../header.php'?>
<div class="mx-0 mx-sm-auto">
  <div class="card text-white mb-3 mx-auto" style="width: 25rem;"> <!-- text-white bg-primary mb-3 mx-auto-->
    <div class="card-body">
      <form class="px-2" action="resultat.php" method="post">
        <p class="text-center"><strong>Comment évaluez-vous le cours PHP:</strong></p>

        <div class="pb-3 text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Bon" name="vote" value="Bon">
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
          <textarea class="form-control" id="reponse" name="reponse" rows="4" placeholder="Ecrire Içi !!"></textarea>
        </div>
      </form>
    </div>
    <div class="card-footer text-end">
      <button type="button" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
<?php include_once '../footer.php'?>
