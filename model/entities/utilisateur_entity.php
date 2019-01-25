<?php
/*les fichiers entity contiennt la liste
des fonctions pour interagir avec les données*/

// fonction pour se connecter a l'interface
//  avec email et mot de passe

function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;

    $query = "
    SELECT *
    FROM utilisateur
    WHERE email = :email
    AND mot_de_passe = SHA1(:password)
   
   ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}