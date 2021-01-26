<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <!-- <?php //include("index_controller.php");?> -->
        <div class="row m-0 p-0">

            <!--  titre LOVELINE -->








        <!--------------------------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------------FORMULAIRE---------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------------------------------------------------------------->
            <form method="post" action="lovers.php">
                <label for="lastname">Nom : </label>
                <input type="text" id="lastname" name="lastname">
                <label for="firstname">Prénom : </label>
                <input type="text" id="firstname" name="firstname">
                <label for="age">Age : </label>
                <input type="text" id="age" name="age">
                <label for="gender">Civilité : </label>
                <input type="radio" id="gender" name="gender" value="Homme">
                <input type="radio" id="gender" name="gender" value="Femme">
                <label for="mail">Adresse email : </label>
                <input type="mail" id="mail" name="mail">
                <label for="zipcode">Code postal : </label>
                <input type="text" id="zipcode" name="zipcode">
                <label for="img">Photo de profil : </label>
                <input type="file" id="img" name="img">
                <label for="description">Description : </label>
                <textarea id="description" name="description"></textarea>
                <input type="submit" value="Rencontrer nos célibataires">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>