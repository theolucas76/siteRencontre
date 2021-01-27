<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <!-- nav bar-->
        <div class="container m-0 p-0">
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

            <?php include("../controllers/lovers_controller.php");?>

            <!-- card 
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Jacky 30 ans</h5>
                            <p class="card-text">Description de jacky</p> 
                        </div>
                        <div class="card-footer">
                            <button class="danger" value="Like">Like</button>
                        </div>
                    </div>
                </div>
            </div>-->




        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>