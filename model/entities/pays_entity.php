<?php
//
//// requete pour les pays
//
//function getPays(int $id): array {
//    global $connection;
//
//    $query = "
//    SELECT *,
//
//    FROM pays
//    INNER JOIN destinations on pays.id = destinations.pays_id
//    LEFT JOIN unite on rhi.unite_id = unite.id
//    WHERE rhi.recette_id = :id
//
//    ";
//
//    $stmt = $connection->prepare($query);
//    $stmt->bindParam(":id", $id);
//    $stmt->execute();
//
//    return $stmt->fetchAll();
//}







