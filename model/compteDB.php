<?php

require_once "database.php";


function addCompte($numero, $typeCompte, $solde, $dateCreation, $idClient)
{
    $db = getConnexion();

    $sql = "INSERT INTO `compte`(`numero`, `typeCompte`, `solde`, `dateCreation`, `idClient`)
     VALUES ('$numero','$typeCompte',$solde,'$dateCreation', '$idClient')";

    return $db->exec($sql);
}


function listeCompte()
{
    $db = getConnexion();
    $var = "SELECT * FROM compte ";

    return $db->query($var)->fetchAll();
}

function deleteCompte($numero)
{
    $db = getConnexion();

    $sql = "DELETE FROM compte WHERE numero = '$numero'";

    return $db->exec($sql);
}
