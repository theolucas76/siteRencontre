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
    <!-- <?php //include("index_controller.php");
            ?> -->
    <div class="row m-0 p-0">

        <!--  titre LOVELINE -->

        <!-- background-img -->






        <!--------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------FORMULAIRE---------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------------------------------------------------------------->
        <div class="container-fluid bg-primary">
        <div class="row">
            <header class="col text-center">
                <img src="assets/img/logowhite.png"
							alt="logo Love Line">
                <h1>LOVE LINE</h1>
                <h2 class="mb-5">Bienvenue sur votre site de rencontre en ligne </h2>
            </header>
            <form>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastname" class="mb-3">Votre nom</label>
                            <input type="lastname" class="form-control" id="lastname" placeholder="Ex. Dupont">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstname" class="mb-3">Votre prénom </label>
                            <input type="firstname" id="firstname" class="form-control" name="firstname"
                                placeholder="Ex. Marie">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="mb-3">Votre adresse mail </label>
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Ex. mdupont@gmail.com">
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="age" class="mb-3">Votre age</label>
                            <input type="number" class="form-control" id="age" placeholder="Ex. 27">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zipCode" class="mb-3">Votre code postale </label>
                            <input type="number" id="zipCode" class="form-control" name="zipCode" placeholder="76000">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="profilPicture" class="mb-3">Votre photo de profil </label>
                            <input type="file" id="profilPicture" class="form-control" name="profilPicture">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Vous êtes</p>
                        <div class="form-group">
                            <label for="female">Femme</label>
                            <input type="radio" id="female" name="female" value="Femme" checked>
                            <label for="male">Homme</label>
                            <input type="radio" id="male" name="male" value="Homme">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>Vous recherchez</p>
                        <div class="form-group">
                            <label for="female">Femme</label>
                            <input type="radio" id="female" name="female" value="Femme">
                            <label for="male">homme</label>
                            <input type="radio" id="male" name="male" value="Homme" checked>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="button">
                            <button type="submit" name="submit">Valider votre profil</button>
                        </div>
                    </div>


                </div>
            </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>