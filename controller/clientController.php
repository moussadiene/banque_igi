<?php
require_once '../model/clientDB.php';


if (isset($_GET["id"])) {

    $info = delete($_GET["id"]);

    header("Location: ../view/client.php?delete=$info");
}

extract($_POST);

if (isset($envoyer)) {

    $ok = addClient($nom, $prenom, $adresse, $genre, $tel, $email);

    header("Location: ../view/client.php?add=$ok");
}
