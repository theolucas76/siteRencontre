<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/logo.ico" />
    </head>
    <body>
    <div class="container-fluid m-0 p-0 vh-100" id="gradient-bg">
        <div class="row m-0 p-0 vw-100">
            <div class="col-md-5 m-0 p-0">
                <img src="../assets/img/couple1.png" class="d-block align-items-left w-100 vh-100" alt="photo d'un couple">
            </div>
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
                                    <a class="nav-link text-white">Bienvenue <?= $_COOKIE['firstname']?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="user.php">Votre profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class= "row ">
                <div class="col-10 border border-white m-5 justify-content-middle">
                    <h2 class="text-center text-white mt-5 mb-2">Nos célibataires</h2>

                    <div class="row d-flex justify-content-center my-3 text-white text-center mb-5" id="menProfiles">
                        <div class="col-lg-5">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php include("../controllers/lovers_controller.php");?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div><footer class="mt-5">
                <p class="text-center text-white">© Théo Lucas & Nora Charef La Manu 2020  <a class="text-white" id="mention" href="../mentionslégales.html">mentions légales</a></p>
            </footer>
        </div></div> 
            </div>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>