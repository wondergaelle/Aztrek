<?php


// Requete pour les sejours

function getAllSejoursByPays (int $id) {
    global $connection;
/* envoi de requete sql au serveur ==> script d envoi de requete et des objets associés*/
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

    /* execute la requete sql et retourne le nbre de lignes affectées */
    $stmt = $connection->prepare($query);
    /*bindparam est liée en tant que référence et ne sera évaluée
    qu'au moment de l'appel à la fonction excecute*/
    $stmt->bindParam(":id", $id);
    /* execute une requete preparee */
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

function insertSejours(string $libelle,   string $image, string $days, string $accompany, string $description) {
    global $connection;

    $query = "
    INSERT INTO sejours (libelle, photo , accompany,  days, description )
    VALUES (libelle := libelle, photo := image,  accompany := accompany, days := days, description := description)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":accompany", $accompany);
    $stmt->bindParam(":days", $days);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}



