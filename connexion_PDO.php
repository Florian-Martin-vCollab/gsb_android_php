<?php

/**
 * Permet la connexion à une base de données MySQL
 * @return \PDO
 */
function connexionPDO() {

    $login = "root";
    $mdp = "";
    $bd = "gsb_frais";
    $serveur = "localhost";

    try {
        $myPDO = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp);
        // Activation des erreurs PDO
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $myPDO;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die();
    }
}
?>
