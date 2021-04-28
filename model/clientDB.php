<?php

require_once "database.php";


function addClient($nom, $prenom, $adresse, $genre, $tel, $email)
{
    $db = getConnexion();

    $sql = "INSERT INTO `client`(`id`, `nom`, `prenom`, `adresse`, `genre` , `tel` , `email`)
     VALUES (null,'$nom','$prenom',' $adresse','$genre', '$tel','$email')";

    return $db->exec($sql);
}


function listeClient()
{
    $db = getConnexion();
    $var = "SELECT * FROM client ";

    return $db->query($var)->fetchAll();
}

function delete($id)
{
    $db = getConnexion();

    $sql = "DELETE FROM client WHERE id = $id";

    return $db->exec($sql);
}

