<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php //include("user_controller.php");?>
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <section class="mx-auto">
                        <img src="" alt="photo profil">
                        <div class="row">
                            <div class="col-6">
                                <p><?= $_COOKIE['lastname'];?></p>
                            </div>
                            <div class="col-6">
                                <p><?= $_COOKIE['firstname'];?></p>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </section>
                </div>
                <div class="col-3"></div>
            </div>
        </div>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>