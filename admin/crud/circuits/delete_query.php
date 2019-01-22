<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

// fonction cree dans database
$error = deleteEntity("circuits", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

header('Location: index.php');
