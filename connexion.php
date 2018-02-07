<!doctype html>
<html lang="fr">

<?php require('partials/head.php') ?>

<head>
    <link rel="stylesheet" href="css/connexion.css">
</head>

<body>
    <?php require('partials/header.php'); ?>

    <div class="container">
        <div class="row connect">
            <div class="col-md-5">
                <div class="student">
                    <p class="titre">Etudiant</p>
                    <form action="" method="">
                        <div class="form-group">
                            <label class="label" for="id">Identifiant</label>
                            <input type="text" class="form-control" name="id" placeholder="nom.prenom">
                            <label class="label" for="pwd">Mot de passe</label>
                            <input type="password" class="form-control" name="pwd" placeholder="Mot de passe">
                            <button type="submit" class="btn btn-dark btn-block">Connexion</button>
                            <a href="accueil.php">Accueil</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="compagny">
                    <p class="titre">Vous êtes une entreprise ?</p>
                    <a name="" class="btn btn-light btn-block" href="#" role="button">Envoyez vos offres</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center footer">
        <p>© IUT du Littoral Côte d'Opale</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>