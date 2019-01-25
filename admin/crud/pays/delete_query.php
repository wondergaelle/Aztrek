<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$pays = getOneEntity("pays", $id);

$error = deleteEntity("pays", $id);

if ($error) {
    header('Location: index.html?errcode=' . $error->getCode());
    exit;
}

unlink("../../../uploads/" . $pays["image"]);

header('Location: index.php');
