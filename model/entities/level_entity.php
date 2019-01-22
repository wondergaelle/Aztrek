<?php

// pour generer les categories ==> donc pas de ciblage d'id car libelle a creer

function insertCategorie (string $libelle) {
    global $connection;

    $query = " INSERT INTO circuits(libelle) VALUES (:libelle)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
}

// Pour modifier la circuits existante

function updateCategorie (int $id, string $libelle) {
    global $connection;

    $query = " UPDATE circuits SET libelle = :libelle WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
}