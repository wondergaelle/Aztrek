<?php require_once '../../layout/header.php'; ?>



    <h1>Ajout d'un Pays</h1>
<!--pour uploader des fichier attribut enctype="multipart/form-data-->
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

<?php require_once '../../layout/footer.php'; ?>