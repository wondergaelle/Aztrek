<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST['libelle'];
$image = $_POST['image'];
$niveaux_id = $_POST['niveaux_id'];
$accompany = $_POST['accompany'];
$days = $_POST['days'];
$description = $_POST['description'];
$pays_id = $_POST['pays_id'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertSejours($libelle, $photo , $niveaux_id, $accompany,  $days, $description, $pays_id );

header('Location: index.php');
