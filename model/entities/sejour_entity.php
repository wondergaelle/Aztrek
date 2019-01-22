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
