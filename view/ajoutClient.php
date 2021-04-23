<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
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

    <div class="text-center bg-link">
        <marquee behavior="" direction="">
        <h2 >CLIENT</h2>
        </marquee>
    </div>
    <div>
   

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="client.php">Client</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ajout</li>
            </ol>
        </nav>

    </div>
    <div>
    <div class="card">
        <div class="card-header bg-info text-center">
           <h4 class="color-white">Formulaire d'ajout de client</h3>
        </div>
        <div class="card-body">
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="prenom"> Prenom:</label>
                    <input type="text" class="form-control" placeholder="Entrer le prenom" id="prenom">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Entrer email" id="email">
                </div>
                <button type="reset" class="btn btn-secondary">Annuler</button>
                <button type="submit" class="btn btn-info">Envoyer</button>
            </form>
        </div>

    </div>
    
</div>
</body>
</html>