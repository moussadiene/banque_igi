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
<div class="container mt-2">
    <ul class="nav nav-pills bg-secondary">
    <li class="nav-item">
        <a class="nav-link " href="../index.php">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="compte.php">Compte</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="client.php">Client</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="transaction.php">Transaction</a>
    </li>
    </ul>

    <div class="text-center jumbotron">
        <marquee behavior="" direction="">
        <h2 class="color-white" >CLIENT</h2>
        </marquee>
    </div>
    <div>
       
    <a href="ajoutClient.php" class="btn btn-primary">Ajouter </a>
    </div>
    <div class="mt-2 bg-secondary p-2">
        <form action="">
            <div class="row">
                <div class="col-10">
                    <input type="text" placeholder="rechercher un client par son matricule" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">search</button>
                </div>
            </div>
           
        </form>
    </div>
    <div class="mt-2">
        <table class="table">
            <thead>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>