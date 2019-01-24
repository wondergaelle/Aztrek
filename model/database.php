<?php

require_once __DIR__ . "/../config/parameters.php";

try {
    $connection = new PDO("mysql:host=" . DB_HOST . ";dbname="  . DB_NAME,  DB_USER,  DB_PASS, [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
    die;
}
// fichiers de fonctions générales ///

///*********///////



// Chargement des fonctions dans le dossier "entities"
$files = glob(__DIR__ . "/entities/*.php");
foreach ($files as $filepath) {
    require_once $filepath;
}

// fonction générale à utiliser pour toutes les tables assez simples
function getAllEntities(string $table){
    global $connection;

    $query = "SELECT * FROM $table ";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();

}

function getOneEntity(string $table, int $id) : array{
    global $connection;

    $query = "SELECT * FROM $table WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

// prend en parametre les caracteres pour les chaines de la table en entier pour l id
function deleteEntity(string $table, int $id){
    global $connection;

    $query = "DELETE FROM $table WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);// BIND PARAM LIEN ENTRE L'ID DE LA LA L54 DE PHP POUR LA METTRE DANS LA VARIABLE SQL EN L52
    $stmt->execute();


    //
    try{
        $stmt->execute();
    }catch (PDOException $exception){
        return $exception;
    }
    return null;
}

//
//function updatePhoto(string $table, int $id) : array{
//    global $connection;
//
//    $query = "SELECT * FROM $table WHERE id = :id";
//    $stmt = $connection->prepare($query);
//    $stmt->bindParam(":id", $id);
//    $stmt->execute();
//
//    return $stmt->fetch();
//}






