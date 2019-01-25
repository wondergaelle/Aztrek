<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$libelle = $_POST['libelle'];
$image = $_POST['image'];
$niveaux_id = $_POST['niveaux_id'];
$accompany = $_POST['accompany'];
$days = $_POST['days'];
$description = $_POST['description'];
$pays_id = $_POST['pays_id'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
//    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["photo"];
}

updateSejour($id, $libelle, $description, $filename);

header('Location: index.php');
