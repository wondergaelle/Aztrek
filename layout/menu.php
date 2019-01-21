<?php
require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../model/database.php";

$liste_pays = getAllEntities("pays");
?>
<nav class="main-nav">
    <ul>
        <li><a href="#">Accueil</a></li>

        <li class="has-sublist"><a href="#">Les pays</a>
            <ul>
                <li><?php foreach ($liste_pays as $pays) : ?>
                        <a href="pays.php?id=<?= $pays["id"]; ?>">
                            <?= $pays["libelle"]; ?>
                        </a>
                    <?php endforeach; ?>
                </li>
            </ul>
        </li>
        <li><a href="#">les séjours</a></li>
        <li><a href="#">les accompagnateurs</a></li>
        <li><a href="#">guide pratique</a></li>
        <li><a href="#">aztrek sur les réseaux</a></li>
        <li><a href="#">témoignages de voyageurs</a></li>
        <li><a href="#">nous contacter</a></li>
    </ul>
</nav>
