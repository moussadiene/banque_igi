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
        <ul class="nav nav-pills bg-secondary p-1">
            <li class="nav-item">
                <a class="nav-link color-info" href="../index.php">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-info" href="compte.php">Compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-info active" href="client.php">Client</a>
            </li>
            <li class="nav-item color-info">
                <a class="nav-link color-info " href="transaction.php">Transaction</a>
            </li>
        </ul>

        <div class="text-center bg-link">
            <marquee behavior="" direction="">
                <h2>CLIENT</h2>
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
                    <form action="../controller/clientController.php" method="post">
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="prenom"> Prenom *:</label>
                                <input type="text" class="form-control" placeholder="Entrer le prenom" name="prenom" required>
                            </div>
                            <div class="form-group col-4">
                                <label for="nom"> Nom *:</label>
                                <input type="text" class="form-control" placeholder="Entrer le nom" name="nom" required>
                            </div>
                            <div class="form-group col-4">
                                <label for="genre"> Genre *:</label>
                                <select name="genre" id="genre" class="form-control" required>
                                    <option value="">-- selectionner --</option>
                                    <option value="M">masculin</option>
                                    <option value="F">feminin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prenom"> Adresse *:</label>
                            <input type="text" class="form-control" placeholder="Entrer l'adresse" name="adresse" required>
                        </div>

                        <div class="form-group">
                            <label for="prenom"> Telephone *:</label>
                            <input type="text" class="form-control" placeholder="Entrer le numero de telephone" name="tel" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" placeholder="Entrer email" name="email" required>
                        </div>
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-info" name="envoyer">Envoyer</button>
                    </form>
                </div>

            </div>

        </div>
</body>

</html>