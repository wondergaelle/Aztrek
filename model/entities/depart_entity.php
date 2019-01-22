<?php

function getAllDepartsByCircuit(int $id) {
    {
        global $connection;

        $query = "

    SELECT
      depart.*,
      circuits.libelle AS circuit
    FROM circuits
    INNER JOIN depart ON depart.circuits_id = circuits.id
    
    WHERE depart.circuits_id = :id
    GROUP BY depart.id
    ";

        $stmt = $connection->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}