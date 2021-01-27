<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.ico" />
    </head>
    <body>
    <div class="container-fluid background" id="gradient-bg">
        <div class="row m-0">
            <div class="col-md-6">
                <img src="../assets/img/couple1.png" class="d-block align-items-left w-100 m-0" alt="photo d'un couple">
            
                <!-- nav bar-->
        
                <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#">
                        <img src="assets/" alt="">
                </a>
                    <button class="navbar-toggler bg-dark" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navbarNav" 
                            aria-controls="#navbarNav" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarNav" class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <span class="nav-link">Hello  <?= $_COOKIE['lastname']?> </span>
                            </li>
                            <li class="nav-item">
                                <a href="lovers.php" class="nav-link">Nos Lovers</a>
                            </li>
                            <li class="nav-item">
                                <a href="user.php" class="nav-link">Profil</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
                            <?php include("../controllers/lovers_controller.php");?>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>