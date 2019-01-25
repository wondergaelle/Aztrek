<?php require_once


/*$libelle = getOneEntities("libelle");
$image = getOneEntities("image");
$niveaux_id = getOneEntities("niveaux_id");
$accompany = getOneEntities("accompany");
$days = getOneEntities("days");
$description = getOneEntities("description");
$pays_id = getOneEntities("pays_id");*/



'../../layout/header.php'; ?>

<h1>Ajout d'un Séjour</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <select name="difficulte_id" class="form-control">
                <?php foreach ($niveaux_id as $niveau_id) : ?>
                <option value="<?php echo $niveau_id["id"]; ?>">
                    <?php echo $niveau_id["libelle"]; ?>
                </option>
            <?php endforeach; ?>*/
        </select>
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


<?php require_once '../../layout/footer.php'; ?>


