<?php
require_once '../../../model/database.php';

$categories = getAllEntities("sejours");

require_once '../../layout/header.php';
?>

<h1>Ajout d'un Sejour</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom du Pays</label>
        <input type="text" name="libelle" class="form-control" placeholder="Libellé" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<!---->
<!--<h1>Ajout d'une photo</h1>-->
<!---->
<!--<form action="create_query.php" method="POST" enctype="multipart/form-data">-->
<!--    <div class="form-group">-->
<!--        <label>Titre</label>-->
<!--        <input type="text" name="titre" class="form-control" placeholder="Titre" required>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Catégorie</label>-->
<!--        <select name="categorie_id" class="form-control">-->
<!--            --><?php //foreach ($sejours as $sejour) : ?>
<!--                <option value="--><?php //echo $sejour["id"]; ?><!--">-->
<!--                    --><?php //echo $sejour["libelle"]; ?>
<!--                </option>-->
<!--            --><?php //endforeach; ?>
<!--        </select>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Image</label>-->
<!--        <input type="file" name="image" class="form-control" enctype="multipart/form-data"required>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Description</label>-->
<!--        <textarea name="description" class="form-control"></textarea>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Description courte</label>-->
<!--        <input type="text" name="description_courte" class="form-control" placeholder="Description courte" required>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Nombre de couverts</label>-->
<!--        <input type="number" name="couverts" class="form-control" required>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Temps de preparation</label>-->
<!--        <input type="time" name="temps_prepa" class="form-control" required>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group form-check">-->
<!--        <input type="checkbox" name="publie" class="form-check-input" required>-->
<!--        <label>Publié ?</label>-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-success">-->
<!--        <i class="fa fa-check"></i>-->
<!--        Ajouter-->
<!--    </button>-->
<!--</form>-->

<?php require_once '../../layout/footer.php'; ?>


