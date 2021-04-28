<?php
require_once '../model/clientDB.php';
require_once '../model/compteDB.php';


if (isset($_GET["numero"])) {

    $info = deleteCompte($_GET["numero"]);

    header("Location: ../view/compte.php?delete=$info");
}

extract($_POST);

if (isset($envoyer)) {

    $dateCreation = getDateNow(
        
    );
    //$dateCreation = new DateTime(null, new DateTimeZone('Africa/Casablanca'));
    $numero = codeNumero(8);
    $ok = addCompte($numero, $typeCompte, $solde, $dateCreation, $idClient);
    header("Location: ../view/compte.php?add=$ok");
}

function codeNumero($taille)
{
    $string = "";
    $chaine = "12643789ABDCEFGHJKMNPRTUVWXYZ";
    srand((float)microtime() * 1000000);
    for ($i = 0; $i < $taille; $i++) {
        $string .= $chaine[rand() % strlen($chaine)];
    }
    return $string;
}


function getDateNow()
{
    $tz_object = new \DateTimeZone('UTC');
    $datetime = new \DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d h:i:s');
}
