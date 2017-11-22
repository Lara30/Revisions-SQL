<?php
function getResult($resultat)
{
    $servername = "localhost";
    $username = "root";
    $password = "coda";
    try {
        $bdd = new PDO("mysql:host=$servername;dbname=revisions", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "Connexion échouée: " . $e->getMessage();
    }

    $affichage = $bdd->query($resultat);
    $donnees = $affichage->fetchAll();
    return $donnees;
}