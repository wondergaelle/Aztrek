<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$photo = getOneEntity("sejours", $id);

$error = deleteEntity("sejours", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

unlink("../../../uploads/" . $image["image"]);

header('Location: index.php');
