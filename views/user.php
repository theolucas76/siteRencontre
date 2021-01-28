<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Love Line Site de rencontre</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/logo.ico" />
</head>

<body class="vh-100">
    <?php include("../controllers/user_controller.php");?>
    <div class="container-fluid text-white text-center m-0 p-0 vw-100" id="gradient-bg">
        <div class="row m-0 p-0 vw-100">


            <div class="col-md-7">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Bienvenue <?= $_COOKIE['firstname'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Nos célibataires</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="../index.php" name="submitOut">Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="p-5 border border-white">
                    <h2 class="text-center text-white mt-5 mb-5"><?= $_COOKIE['lastname']?> <?= $_COOKIE['firstname']?>, <?= $_COOKIE['age']?></h2>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3">
                            <img src="../assets/img/<?= $_COOKIE['profilPicture']?>" class="d-block align-items-left w-100">
                        </div>
                        <p> description de la personne : </p>
                        <p> </p>
                    </div>

                    <div class="p-5">
                        <button type="button" class="btn btn-outline-light" id="button">Fermer x
                        </button>
                    </div>
                    <div class=" p-5 text-white">
                        <a href="https://www.meetic.fr/"><button type="button" class="btn text-white" id="button"> Get my money
                        </button></a>
                    </div>
                </div>   
                <footer class="mt-5">
        <p class="text-center">© Théo lucas & Nora Charef La Manu 2020  <a href="../mentionslégales.html">mentions légales</a></p>
    </footer>
            </div>

            <div class="col-5 m-0 p-0">

                <img src="../assets/img/couple2.png" class="d-block align-items-left w-100" alt="photo d'un couple">
            </div>
        </div>
    </div>
 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>