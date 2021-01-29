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
                            data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="">Bienvenue <?= $_COOKIE['firstname'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="lovers.php">Nos célibataires</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="../index.php" name="submitOut">Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-10 mt-5 mx-auto border border-white">
                <div class="p-2 ">
                    <h2 class="text-center text-white mt-5 mb-2"><?= $_COOKIE['lastname']?> <?= $_COOKIE['firstname']?></h2>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3">
                            <img src="../assets/img/<?= $_COOKIE['profilPicture']?>" class="d-block align-items-left w-100">
                        </div>
                        <h4 class="m-2">Vos informations</h4>
                        <p><?=$_COOKIE['gender']?> <?=$_COOKIE['age']?> ans / <?= $_COOKIE['zipCode']?> <br><?= $_COOKIE['email']?> 
                        <br>Je recherche des <?= $_COOKIE['search'] ?></p>
                    </div>

                    <div class=" text-white">
                        <a href="https://www.meetic.fr/" target="_blank"><button type="button" class="btn text-white" id="button"> Get my money
                        </button></a>
                    </div>
                </div></div>
                </div>   
                <footer class="mt-5">
        <p class="text-center">© Théo lucas & Nora Charef La Manu 2021  <a id="mention" href="../mentionslégales.html">mentions légales</a></p>
    </footer>
            </div>

            <div class="col-md-5 col-sm-12 m-0 p-0">
                <img src="../assets/img/couple2.png" class="d-block align-items-left w-100 img-fluid" alt="photo d'un couple">
            </div>
        </div>
    </div>
 
    </div>

    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>