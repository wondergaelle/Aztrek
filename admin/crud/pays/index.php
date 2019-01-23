<?php
require_once '../../../model/database.php';

$pays = getAllEntities("pays");

$error_msg = null;
if (isset($_GET['errcode'])) {
    $errcode = $_GET['errcode'];
    switch ($errcode) {
        case 23000:
            $error_msg = "Erreur lors de la suppression !";
            break;
        default:
            $error_msg = "Une erreur est survenue !";
            break;
    }
}

require_once '../../layout/header.php';
?>

<h1>Gestion des Pays</h1>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<?php if ($error_msg) : ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php echo $error_msg; ?>
    </div>
<?php endif; ?>

<table class="table table-striped table-bordered table-condensed">
    <thead class="thead-light">
        <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Pays</th>
            <th>Action</th>
<!--            <th class="actions">Actions</th>-->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pays as $pays) : ?>
            <tr>
                <td><?php echo $pays['libelle']; ?></td>
                <td>
                    <img src="../../../uploads/<?php echo $pays['photo']; ?>" class="img-thumbnail">
                </td>
                <td><?php echo $pays['description']; ?></td>
<!--                <td>--><?php //echo $pays['pseudo']; ?><!--</td>-->
<!--                <td>--><?php //echo $pays['date_creation_format']; ?><!--</td>-->
                <td class="actions">
                    <a href="update.php?id=<?php echo $pays['id']; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $pays['id']; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>