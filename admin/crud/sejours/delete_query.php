<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity("sejours", $id);

$error = deleteEntity("sejours", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

unlink("../../../uploads/" . $sejour["image"]);

header('Location: index.php');
