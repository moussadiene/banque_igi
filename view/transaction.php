<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<div class="container mt-2">
    <ul class="nav nav-pills bg-secondary">
        <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="compte.php">Compte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="client.php">Client</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" href="transaction.php">Transaction</a>
        </li>
    </ul>

    <div class="bg-primary mt-2 text-center pa-10">
        <h2 class="color-white" >Transaction</h2>
        <hr>
    </div>
    <div class="text-center">
        <button class="btn btn-primary"> Depot </button>
        <button class="btn btn-primary"> Retrait </button>
    </div>
    <div class="mt-2 bg-secondary p-2">
        <form action="">
            <div class="row">
                <div class="col-10">
                    <input type="text" placeholder="rechercher par numero de compte" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">search</button>
                </div>
            </div>
           
        </form>
    </div>
      
</div>
</body>
</html>