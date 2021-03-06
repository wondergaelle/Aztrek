<?php
/*les fichiers entity contiennt la liste
des fonctions pour interagir avec les données*/

// pour generer les categories dans la partie Admin ==> donc pas de ciblage d'id car libelle a creer

function insertPays(string $libelle, string $image, string $description)
{
    global $connection;

    /* il est impératif de reprendre les attributs des
    tableaux et de  conserver l'ordre pour la saisie dans crud */

    $query = " INSERT INTO pays(libelle, photo, description) VALUES (:libelle, :image, :description)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}

// Pour modifier les pays existants

function updatePays(int $id, string $libelle, string $description, string $image)
{
    global $connection;

    $query = "UPDATE pays SET libelle = :libelle, photo = :image, description = :description WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);

    $stmt->execute();
}

