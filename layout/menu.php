<?php
require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../model/database.php";
require_once __DIR__ . "/../functions.php";

//recuperation de la variable creee dans functions pour le sous menu
$user = get_current_user();

$liste_pays = getAllEntities("pays");
?>
<nav class="main-nav">
    <ul>
        <li><a href="<?= SITE_URL ?>">Accueil</a></li>
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
        <?php if (isset($utilisateur)) : ?>
            <li><a href="#"><i class="fa fa-user"></i> <?= $utilisateur["email"]; ?></a></li>
            <li><a href="<?= SITE_ADMIN . "logout.php"; ?>"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
        <?php else: ?>
            <li><a href="<?= SITE_ADMIN; ?>"><i class="fa fa-sign-in"></i> Log in</a></li>
            <li><a href="<?= SITE_URL . "create_account.php"; ?>"><i class="fa fa-user-plus" ></i> Créer votre compte</a></li>
        <?php endif; ?>

        <li><a href="#">les séjours</a></li>
        <li><a href="#">les accompagnateurs</a></li>
        <li><a href="#">guide pratique</a></li>
        <li><a href="#">aztrek sur les réseaux</a></li>
        <li><a href="#">témoignages de voyageurs</a></li>
        <li><a href="#">nous contacter</a></li>
    </ul>
</nav>
