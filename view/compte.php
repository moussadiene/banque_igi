<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <?php
  require_once "../model/clientDB.php";
  require_once "../model/compteDB.php";

  $clients = listeClient();
  $comptes = listeCompte();

  ?>
  <div class="container mt-2">
    <ul class="nav nav-pills bg-secondary">
      <li class="nav-item">
        <a class="nav-link " href="../index.php">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="compte.php">Compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="client.php">Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="transaction.php">Transaction</a>
      </li>
    </ul>

    <div class="text-center jumbotron">
      <marquee behavior="" direction="">
        <h2 class="color-white">GESTION DES COMPTES</h2>
      </marquee>
    </div>
    <div class="mb-2">

      <?php if (isset($_GET['add'])) : ?>
        <span class="alert alert-success"> Donnée Ajouter</span>
      <?php endif ?>

      <?php if (isset($_GET['delete'])) : ?>
        <span class="alert alert-info"> Donnée Supprimer</span>
      <?php endif ?>
    </div>
    <div class="mt-3">
      <a href="ajoutCompte.php" class="btn btn-primary">Ajouter </a>
    </div>
    <div class="mt-2 bg-secondary p-2">
      <form action="">
        <div class="row">
          <div class="col-10">
            <input type="text" placeholder="rechercher un COMPTE par NUMERO" class="form-control">
          </div>
          <div class="col-2">
            <button class="btn btn-primary">RECHERCHER</button>
          </div>
        </div>

      </form>
    </div>
    <div class="mt-2">
      <table class="table table-striped">
        <thead>
          <th>NUMERO</th>
          <th>TYPECOMPTE</th>
          <th>SOLDE</th>
          <th>DATE CREATION</th>
          <th>CLIENT</th>
          <th>Action</th>
        </thead>
        <tbody>
          <? foreach ($comptes as $cpt) { ?>
            <tr>
              <td> <?php echo $cpt['numero'] ?></td>
              <td> <?php echo $cpt['typeCompte'] ?></td>
              <td> <?php echo $cpt['solde'] ?></td>
              <td> <?php echo $cpt['dateCreation'] ?></td>
              <td> <?php echo $cpt['idClient'] ?></td>
              <td><button class="btn btn-info">modifier</button>
                <a class="btn btn-danger" href="../controller/compteController.php?numero=<?php echo $cpt['numero'] ?>">supprimer</a>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>