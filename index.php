<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Love Line Site de rencontre</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.ico" />
</head>

<body>
    <?php include("controllers/index_controller.php");?> 
        <!--------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------FORMULAIRE---------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------------------------------------------------------------->
    <div id="gradient-bg" class="container-fluid text-white p-5">
        <div class="row">
            <header class="col text-center">
                <img src="assets/img/logowhite.png" id="logo" alt="logo Love Line">
                <h1>LOVE LINE</h1>
                <h2 class="mb-5">Bienvenue sur votre site de rencontre en ligne </h2>
            </header>
            <form method="post" action="views/lovers.php" enctype="multipart/form-data" class="p-5 border border-white" name="signIn">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastname" class="mb-3">Votre nom</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstname" class="mb-3">Votre prénom </label>
                            <input type="text" id="firstname" class="form-control" name="firstname" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="mb-3">Votre adresse mail </label>
                            <input type="email" id="email" class="form-control" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="age" class="mb-3">Votre age</label>
                            <input type="text" class="form-control" id="age" name="age" required>
                            <span style="color: darkred;" id="errorAge"></span>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zipCode" class="mb-3">Votre code postale </label>
                            <input type="number" id="zipCode" class="form-control" name="zipCode" placeholder="76000" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="profilPicture" class="mb-3">Votre photo de profil </label>
                            <input type="file" id="profilPicture" class="form-control" name="profilPicture" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Vous êtes</p>
                        <div class="form-group">
                            <label for="female">Femme</label>
                            <input type="radio" id="female" name="gender" value="Femme" required>
                            <label for="male">Homme</label>
                            <input type="radio" id="male" name="gender" value="Homme">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>Vous recherchez</p>
                        <div class="form-group">
                            <label for="female">Femme</label>
                            <input type="radio" id="female" name="search" value="Femme">
                            <label for="male">homme</label>
                            <input type="radio" id="male" name="search" value="Homme" required>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="button text-white">
                            <input type="submit" class="btn btn-outline-light" name="btnSubmit" id="submit" value="Valider votre profil">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer class="mt-5">
            <p class="text-center">© Théo Lucas & Nora Charef La Manu 2020  <a href="#">mentions légales</a></p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>