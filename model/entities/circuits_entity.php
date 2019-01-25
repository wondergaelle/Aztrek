<?php

/*les fichiers entity contiennt la liste
des fonctions pour interagir avec les données*/

//fonctions pour circuits



function getAllCircuitsBySejours (int $id)
{
    global $connection;

    $query = "

    SELECT
      circuits.*,
      sejours.libelle AS sejour
    FROM circuits
    INNER JOIN sejours ON circuits.sejours_id = sejours.id
    INNER JOIN niveaux ON sejours.niveaux_id = niveaux.id
    WHERE circuits.sejours_id = :id
    GROUP BY circuits.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


