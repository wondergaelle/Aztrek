<div class="col-sm-6 col-md-8  col-lg-12 mx-auto img-circuit">
    <h4 class="title-pays"><?= $pays["libelle"]; ?></h4>
</div>


<div class="col-sm-6 col-md-8  col-lg-6 mx-auto img-circuit">
    <img src="images/<?= $pays["photo"]; ?>" alt=<?= $pays["titre"]; ?>
    </div>

    <div class=" col-sm-6 col-md-8 col-lg-6 detail-day">
        <p class="pays-desc">
            <?= $pays["description"]; ?>
        </p>
        <p class="prix-date">A partir de 3240€</p>
        <!-- <p class="prix-date">12 jours</p> -->
        <a href="sejour.html" class="btn-orange mx-auto">découvrir les voyages</a>
    </div>
</div>

