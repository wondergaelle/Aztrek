<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
//$sejours = getAllSejoursByPays($id);

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

    <h1>L'amérique Centrale</h1>
    <p>Voyagez autrement ...</p>
</div>
</header>


<main class="sejour">

    <section class="presentation-sejour">
        <div class="title-section">
            <h6 class="overflow-clip">voyagez</h6>
            <h2 class="title-noir"><?= $pays["libelle"]; ?></h2>
        </div>

        <p><?= $pays["description"]; ?></p>
    </section>

    <div class="title-section">
        <h6>Découvrez</h6>
        <h2 class="title-noir">Nos voyages</h2>
    </div>


    <main class="main-pays">
        <div class="row mx-auto">
            <div class="col-sm-6 col-md-8  col-lg-12 mx-auto img-circuit">
                <h4 class="title-pays"><?= $pays["libelle"]; ?></h4>
            </div>


            <div class="col-sm-6 col-md-8  col-lg-6 mx-auto img-circuit">
                <img src="images/<?= $pays["photo"]; ?>" alt=<?= $pays["titre"]; ?>
            </div>

            <div class=" col-sm-6 col-md-8 col-lg-6 detail-day">
                <?= $pays["description"]; ?></p>
                <p class="prix-date">A partir de 2060€</p>
                <!-- <p class="prix-date">10 jours</p> -->
                <a href="sejour.html" class="btn-orange" class="mx-auto">découvrir les voyages</a>
            </div>
        </div>

    <div class="container-fluid .d-block">
        <div class="row">
            <div class="card-deck">

                <div class="card">
                    <h4 class="card-title "><?= $pays["libelle"]; ?></h4>
                    <img src="images/<?= $pays["photo"]; ?>" alt=<?= $pays["titre"]; ?>
                    <div class="card-block">
                        <p class="card-text ">
                        </p><ul class="list-group text-left">
                        <?= $pays["description"]; ?>
                        </ul>
                        <ul class="card-text card-footer niveau">
                            <li><i class="fas fa-user-alt"></i>Accompagné</li>
                            <li><i class="fas fa-signal"></i>Niveau difficile</li>
                            <li><i class="fas fa-calendar-alt"></i>1O jours</li>
                        </ul>
                        <p></p>
                        <a href="circuit.html" class="btn-orange">découvrir le voyage</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>


<?php getFooter(); ?>

</html>

