<?php


// Requete pour les sejours

function getAllSejourByPays (int $id): array {
    global $connection;

    $query = "
    
    SELECT 
    sejours.*,
    
    FROM pays
  INNER JOIN pays ON sejours = sejours_id
WHERE 
    
    
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}