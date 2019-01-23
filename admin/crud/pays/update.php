<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
//$photo = getEntity("photo", $id);
$pays = getOneEntity("pays", $id);
//$liste_pays = getAllEntities("pays");
//$liste_tags = getAllEntities("tag");

////$photo_liste_tags = getAllTagsByPhoto($id);
//$photo_liste_tags_ids = [];
//foreach ($photo_liste_tags as $tag) {
//    $photo_liste_tags_ids[] = $tag["id"];


require_once '../../layout/header.php';
?>





<h1>Modification d'un pays</h1>

    <form action="update_query.php" method="POST">
        <div class="form-group">
            <label>Libellé</label>
            <input type="text" name="libelle" value="<?php echo $pays ["libelle"]; ?>" class="form-control" placeholder="Libellé" required>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <?php if ($pays["photo"]) : ?>
                <img src="<?php echo $pays["photo"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>

    </form>





<?php require_once '../../layout/footer.php'; ?>