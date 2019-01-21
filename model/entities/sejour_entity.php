<?php


// Requete pour les sejours

function getAllSejourByPays (int $id): array {
    global $connection;

    $query = "
    
    SELECT 
    sejours.*,
    
    FROM sejours
    INNER JOIN pays ON sejours.pays_id = pays.id
    INNER JOIN circuit ON sejours.id = c.destinations_id
    INNER JOIN level ON sejours.level_id = level.id
    WHERE sejours.pays_id = :id
    GROUP BY sejours.id  
    
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}