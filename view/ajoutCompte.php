<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <?php
    require_once "../model/clientDB.php";

    $clients = listeClient();

    ?>
    <div class="container mt-2">
        <ul class="nav nav-pills bg-secondary p-1">
            <li class="nav-item">
                <a class="nav-link color-info" href="../index.php">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-info active" href="compte.php">Compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-info " href="compte.php">Client</a>
            </li>
            <li class="nav-item color-info">
                <a class="nav-link color-info " href="transaction.php">Transaction</a>
            </li>
        </ul>

        <div class="text-center bg-link">
            <marquee behavior="" direction="">
                <h2>PAGE D'AJOUT DE COMPTE</h2>
            </marquee>
        </div>
        <div>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="compte.php">Compte</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajout</li>
                </ol>
            </nav>

        </div>
        <div class="mr-5 ml-5">
            <div class="card mr-5 ml-5">
                <div class="card-header bg-info text-center">
                    <h4 class="color-white">Formulaire d'ajout de compte</h3>
                </div>
                <div class="card-body">
                    <form action="../controller/compteController.php" method="post">
                        <div class="form-group">
                            <label for="prenom"> Type de compte *:</label>
                            <select name="typeCompte" id="typeCompte" class="form-control" required>
                                <option value="">-- selectionner --</option>
                                <option value="courant">Compte courant</option>
                                <option value="epargne">Compte epargne</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="idClient"> Client *:</label>
                            <select name="idClient" id="idClient" class="form-control" required>
                                <option value="">-- selectionner --</option>
                                <? foreach ($clients as $cli) { ?>
                                    <option value="<?php echo $cli['id'] ?>"><?php echo $cli['prenom'] . ' ' . $cli['nom'] . ' ' . $cli['tel'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prenom"> Solde *:</label>
                            <input type="number" class="form-control" name="solde" required>
                        </div>

                        <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-info" name="envoyer">Envoyer</button>
                    </form>
                </div>

            </div>

        </div>
</body>

</html>