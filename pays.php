<?php
require_once "model/database.php";
require_once "functions.php";

/* pour recuperer les donnees id utilisation de la variable superglobale get*/
$id = $_GET["id"];

/* fonction getOne get all ==> fonction générale déclarée dans database */
$pays = getOneEntity("pays", $id);
$sejours = getAllSejoursByPays($id);

/* dans l'url fait apparaitre l'intitulé pays et l'id du pays */

getHeader($pays["libelle"], $pays["description"]);

?>

<header class="header-top">

    <a href="index.php"><img src="./images/logo-header.png" alt="" class="logo-header-fixe"></a>


    <div class="header-guatemala">
        <img src="./images/bg-header-pays.jpg" alt="Guatemala">

    </div>

    <button class="nav-toggle" data-target=".main-nav">Menu<span></span></button>
</header>

<?php getMenu(); ?>


<div class="infos">

    <h1><?= $pays["libelle"]; ?></h1>
    <p>Voyagez autrement ...</p>
</div>
</header>


<!--intitule du pays et description -->

<main class="sejour">

    <section class="presentation-sejour">
        <div class="title-section">
            <h6 class="overflow-clip">voyagez</h6>
            <h2 class="title-noir"><?= $pays["libelle"]; ?></h2>
        </div>

        <p><?= $pays["description"]; ?></p>
    </section>

    <!--    liste des sejours proposés par pays-->

    <div class="title-section">
        <h6>Découvrez</h6>
        <h2 class="title-noir">Nos voyages</h2>
    </div>
    <div class="container-fluid .d-block">
        <div class="row">
            <div class="card-deck">

                <?php foreach ($sejours as $sejour) : ?>
                    <div class="card">
                        <h4 class="card-title "><?= $sejour["libelle"]; ?></h4>
                <!--/* Dans cet exemple le lien se fait avec " l'id sejour" utilisée dans l'URL
                    puis ensuite récupérée via la variable $_GET['id'].*/ -->

                        <a href="circuit.php?id=<?= $sejour["id"]; ?>">
                            <img class="card-img-top" src="images/<?= $sejour["photo"]; ?>" alt=<?= $sejour["libelle"]; ?>>
                        </a>
                        <div class="card-block">
                            <p class="card-text ">
                            <ul class="list-group text-left">
                                <?= $sejour["description"]; ?>
                            </ul>
                            </p>
                            <ul class="card-text card-footer niveau">
                                <li><i class="fas fa-user-alt"></i><?= $sejour["accompany"]; ?></li>
                                <ul class="niveau">
                                    /* boucle for sur les niveaux par rapport aux sejours permet
                                    d'incrémenter la variable */
                                    <li>Niveau
                                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                                            <?php if ($i <= $sejour["niveau"]) : ?>
                                                <i class="fa fa-star"></i>
                                            <?php else: ?>
                                                <i class="far fa-star"></i>
                                            <?php endif; ?>
                                        <?php endfor; ?></li>

                                </ul>



<!--                                <li><i class="fas fa-signal"></i>Niveau --><?//= $sejour["niveau"]; ?><!--</li>-->
                                <li><i class="fas fa-calendar-alt"></i><?= $sejour["days"]; ?> jours</li>
                            </ul>
                            </p>
                            <a href="circuit.php?id=<?= $sejour["id"]; ?>" class="btn-orange">découvrir le voyage</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

</main>


<?php getFooter(); ?>

</html>

