<?php

//requete pour les circuits



function getAllCircuitsBySejours (int $id)
{
    global $connection;

    $query = "

    SELECT
      circuits.*,
      sejours.libelle AS sejour
    FROM circuits
    INNER JOIN sejours ON circuits.sejours_id = sejours.id
    INNER JOIN niveaux ON circuits.niveaux_id = niveaux.id
    WHERE circuits.sejours_id = :id
    GROUP BY circuits.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


