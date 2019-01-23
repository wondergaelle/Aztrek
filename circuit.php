<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);
$circuits = getAllCircuitsBySejours($id);
$departs = getAllDepartsByCircuit($id);


getHeader($sejour["libelle"], $sejour["description"]);

?>


<header class="header-top">
    <a href="index.html"><img src="./images/logo-header.png" alt="" class="logo-header-fixe"></a>


    <div class="header-guatemala">
        <img src="./images/bg-header-detail-treck.jpg" alt="Guatemala">

    </div>

    <button class="nav-toggle" data-target=".main-nav">Menu<span></span></button>


    <?php getMenu(); ?>


    <div class="infos">

        <h1><?= $sejour["pays"]; ?></h1>
        <p>le trek à chaque pas</p>
    </div>
</header>

<main class="sejour-detail container">
    <div class="title-section">
        <h6 class="overflow-clip">Vos étapes</h6>
        <h2 class="title-noir"><?= $sejour["libelle"]; ?></h2>
    </div>
    <section class="info-circuit col-sm-4 col-md-10 col-lg-10">
        <ul class="niveau">
            <li><?= $sejour["accompany"]; ?></li>
            <li>Niveau
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <?php if ($i <= $sejour["niveau"]) : ?>
                        <i class="fa fa-star"></i>
                    <?php else: ?>
                        <i class="far fa-star"></i>
                    <?php endif; ?>
                <?php endfor; ?></li>
            <li><i class="fas fa-calendar-alt"></i><?= $sejour["days"]; ?> jours</li>
        </ul>

    </section>


    <section>

        <div class="row mx-auto ">
            <?php foreach ($circuits as $circuit) : ?>

                <div class="col-sm-6 col-md-8  col-lg-6 mx-auto img-circuit">

                    <img class="img-fluid" src="images/<?= $circuit["photo"]; ?>" alt=<?= $circuit["libelle"]; ?>>

                </div>

                <div class=" col-sm-6 col-md-12 col-lg-6 detail-day">

                    <h4><?= $circuit["libelle"]; ?></h4>
                    <ul class="day">
                        <li>Heures de marche : 1h</li>
                        <li>Hébergement : en hôtel</li>
                        <li>Transfert : Véhicule privatisé, entre 3h et 3h30</li>
                    </ul>
                    <p><?= $circuit["description"]; ?></p>

                </div>
            <?php endforeach; ?>
        </div>


    </section>


    <section class="reservation">

        <table class="table table-bordered col-sm-6 col-md-12 col-lg-12">
            <thead>
            <tr>
                <th scope="col">Circuit</th>
                <th scope="col">Date départ</th>
                <th scope="col">Prix Adulte</th>
                <th scope="col">Durée</th>
                <th scope="col">Nombre de places</th>
                <th scope="col">Inscription</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($departs as $depart) : ?>
            <tr>
                <td><?= $depart["sejour"]; ?></td>
                <td><?= $depart["date_depart"]; ?></td>
                <td><?= $depart["price"]; ?> €</td>
                <td><?= $depart["duree"]; ?></td>
                <td><?= $depart["nb_place"]; ?></td>
                <td><a href="#" class="btn-orange" class="btn-resa">S'inscrire</a></td>
                <?php endforeach; ?>
            </tr>

            </tbody></table>

    </section>


</main>

<?php require_once "layout/footer.php"; ?>


