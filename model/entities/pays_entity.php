<?php

// pour generer les categories ==> donc pas de ciblage d'id car libelle a creer

function insertPays(string $libelle, string $description, string $image)
{
    global $connection;

    $query = " INSERT INTO pays(libelle, description, photo) VALUES (:libelle, :description, :image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}

// Pour modifier les pays existants

function updatePays(int $id, string $libelle)
{
    global $connection;

    $query = " UPDATE libelle, description, photo SET :libelle, :description, :image WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}