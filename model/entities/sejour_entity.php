<?php


// Requete pour les sejours

function getAllSejoursByPays (int $id) {
    global $connection;

    $query = "

    SELECT
      sejours.*,
      pays.libelle AS pays,
      niveaux.libelle AS niveau
    FROM sejours
    INNER JOIN pays ON sejours.pays_id = pays.id
    INNER JOIN niveaux ON sejours.niveaux_id = niveaux.id
    WHERE pays.id = :id
    ORDER BY sejours.libelle
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function getOneSejour(int $id) {
    global $connection;

    $query = "

    SELECT
      sejours.*,
      pays.libelle AS pays,
      niveaux.libelle AS niveau
    FROM sejours
    INNER JOIN pays ON sejours.pays_id = pays.id
    INNER JOIN niveaux ON sejours.niveaux_id = niveaux.id
    WHERE sejours.id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertSejours(string $libelle, int $categorie_id, string $image, string $description, string $description_courte,  int $publie, int $utilisateur_id) {
    global $connection;

    $query = "
    INSERT INTO sejours (libelle, image, description, description_courte, couverts, temps_prepa, temps_cuisson, publie, date_creation, utilisateur_id, categorie_id) 
    VALUES (:libelle, :image, :description, :description_courte, :publie, NOW(), :utilisateur_id, :categorie_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
}

