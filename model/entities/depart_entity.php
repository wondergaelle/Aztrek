<?php

function getAllDepartsByCircuit(int $id) {
    {
        global $connection;

        $query = "

    SELECT
      depart.*,
      sejours.libelle AS sejour,
      sejours.days AS duree,
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart
    FROM sejours
    INNER JOIN depart ON depart.circuits_id = sejours.id
    
    WHERE depart.circuits_id = :id
    GROUP BY depart.id
    ";

        $stmt = $connection->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}