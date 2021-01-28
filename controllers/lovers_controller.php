<?php 
    if(isset($_POST['btnSubmit'])){

        setcookie('lastname', $_POST['lastname'], time() + 86400);
        setcookie('firstname', $_POST['firstname'], time() + 86400);
        setcookie('age', $_POST['age'], time() + 86400);
        setcookie('gender', $_POST['gender'], time() + 86400);
        setcookie('zipCode', $_POST['zipCode'], time() + 86400);
        setcookie('email', $_POST['email'], time()+86400);
        setcookie('search', $_POST['search'], time()+86400);
        move_uploaded_file($_FILES['profilPicture']['tmp_name'], '../assets/img/' . basename($_FILES['profilPicture']['name']));
        $imgProfile = $_FILES['profilPicture']['name'];
        setcookie('profilPicture', $imgProfile, time()+86400);
          header("location: lovers.php");
   }elseif($_COOKIE['age']< 18){
          header("location: ../index.php");
   }
   
   $loversHomme = [
          [    'lastname' => 'Jack', 
               'firstname' => 'Jacky', 
               'age' => '30', 
               'gender' => 'Homme', 
               'email' => 'jackylover@hotmail.fr', 
               'zipcode' => '76600', 
               'picture' => 'ppb1.png', 
               'description' => 'Je suis un homme de 30 ans nommé Jacky Jack, j\'adore dégusté de bonnes noix de saint-jacques qui fondent dans la bouche'
          ],
          [    'lastname' => 'Terrieur',
               'firstname' => 'Alain',
               'age' => '45', 
               'gender' => 'Homme', 
               'email' => 'alainterrieur@hotmail.fr', 
               'zipcode' => '76600', 
               'picture' => 'ppb2.png', 
               'description' => 'Alain Terrieur c\'est comme a l\'exterieur '
          ],
        ['lastname' => 'Haba', 'firstname' => 'Bart', 'age' => '25', 'gender' => 'Homme', 'email' => 'barthaba@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb3.png', 'description' => 'J\'ai 25 ans j\'habite au Havre et je possède un bar tabac'],

        ['lastname' => 'Tine', 'firstname' => 'Clément', 'age' => '26', 'gender' => 'Homme', 'email' => 'clementtine@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb4.png', 'description' => 'Je me présente je m\'appelle Clément et j\adore le orange et les fruits'],

        ['lastname' => 'Gole', 'firstname' => 'Henri', 'age' => '32', 'gender' => 'Homme', 'email' => 'henrigole@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb5.png', 'description' => 'Je me présente je m\'appelle Henri, j\'aime beaucoup rigolé'],

        ['lastname' => 'Titouplein', 'firstname' => 'William', 'age' => '28', 'gender' => 'Homme', 'email' => 'titouplein@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb6.png', 'description' => 'Je suis quelqu\'un de très gentil'],

        ['lastname' => 'Aymard', 'firstname' => 'Jean', 'age' => '36', 'gender' => 'Homme', 'email' => 'jean-aymard@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb7.png', 'description' => 'Jean-Aymard de créer des profils'],

        ['lastname' => 'Monslip', 'firstname' => 'Jean-phil', 'age' => '30', 'gender' => 'Homme', 'email' => 'jeanphilmonslip@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb8.png', 'description' => 'stop les clichés j\'aime les caleçons aussi'],

        ['lastname' => 'Affrite', 'firstname' => 'Barack', 'age' => '30', 'gender' => 'Homme', 'email' => 'barackaffrite@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb9.png', 'description' => 'Vendeur de frite mondialement connu, venez dégusté nos frites chez Barack Affrite'],

        ['lastname' => 'Martin', 'firstname' => 'Pierre', 'age' => '30', 'gender' => 'Homme', 'email' => 'pierremartin@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb10.png', 'description' => 'Je suis homme nommé Jacky']
   ];

   $loversFemme = [
          ['lastname' => 'Zeublouse', 'firstname' => 'Agathe', 'age' => '24', 'gender' => 'Femme', 'email' => 'agathezeublouse@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg1.png', 'description' => 'Fan de musique, j\'aime plusieurs style mais le blues me suivra toute ma  vie'],
          ['lastname' => 'Kepoura', 'firstname' => 'Adrienne', 'age' => '30', 'gender' => 'Femme', 'email' => 'adriennekepoura@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg2.png', 'description' => 'Je suis une femme sans pression, je vis au jours le jours'],
          ['lastname' => 'Du Rine', 'firstname' => 'Anna-lise', 'age' => '26', 'gender' => 'Femme', 'email' => 'annalisedurine@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg3.png', 'description' => 'Je travaille dans un laboratoire d\'analyse, ceci est ma destiné, en feras-tu partie ?'],
          ['lastname' => 'Rable', 'firstname' => 'Daisy', 'age' => '35', 'gender' => 'Femme', 'email' => 'daisyrable@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg4.png', 'description' => 'Je suis Daisy Rable. Drop the mic'],
          ['lastname' => 'Sion', 'firstname' => 'Eva', 'age' => '27', 'gender' => 'Femme', 'email' => 'evasion@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg5.png', 'description' => 'J\'ai toujours été à la recherche d\'évasion, si toi aussi tu l\'es, nous sommes fait l\'un pour l\'autre'],
          ['lastname' => 'Arepassé', 'firstname' => 'Jennifer', 'age' => '29', 'gender' => 'Femme', 'email' => 'jenniferarepassé@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg6.png', 'description' => 'Si je me fais froisé, je vais repassé'],
          ['lastname' => 'Age', 'firstname' => 'Marie', 'age' => '40', 'gender' => 'Femme', 'email' => 'marieage@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg7.png', 'description' => 'Je suis ici pour trouver l\'homme de ma vie'],
          ['lastname' => 'Roïd', 'firstname' => 'Paula', 'age' => '25', 'gender' => 'Femme', 'email' => 'paularoid@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg8.png', 'description' => 'Photographe, je sui fan de photographie depuis ma plus tendre enfance'],
          ['lastname' => 'Croche', 'firstname' => 'Sacha', 'age' => '33', 'gender' => 'Femme', 'email' => 'sarahcroche@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg9.png', 'description' => 'Je ne suis pas joignable par téléphone, je n\'aime pas ce genre de technologie.'],
          ['lastname' => 'Louest', 'firstname' => 'Théa', 'age' => '25', 'gender' => 'Femme', 'email' => 'théalouest@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppg10.png', 'description' => 'Je suis à la recherche d\'anciennes connaissances pour retrouver mes copains de maternelle #copainsd\'avant']
   ];
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     /////////////////////////////////////////////////////////////LOVERS FEMME/////////////////////////////////////////////////////////////////////
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     if($_COOKIE['search'] == 'Femme'){
          foreach($loversFemme as $key => $infos){
               $photo = $infos['picture'];
               $lastname = $infos['lastname'];
               $firstname = $infos['firstname'];
               $age = $infos['age'];
               $zipCode = $infos['zipcode'];
               $description = $infos['description'];
               $btn = 0;
               ?>
               
               <?php
               if($key == 0){?>
                    <div class="carousel-item active">
                         <img src="../assets/img/<?= $photo ?>" class=" carouselImage img-fluid d-block w-100">
                         <div class="carousel-caption d-none d-md-block">
                              <h5><?=$firstname?>, <?=$age?></h5>
                              <button type="button" class="btn btn-outline-light" id="button"
                                                       data-bs-toggle="modal" data-bs-target="#<?= $firstname ?>">
                              Profil</button>
                         </div>
                    </div>
               <?php 
               }else{
               ?>
               <div class="carousel-item">
                    <img src="../assets/img/<?= $photo ?>" class=" carouselImage img-fluid d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                         <h5><?=$firstname?>, <?=$age?></h5>
                         <button type="button" class="btn btn-outline-light" id="button"
                                                    data-bs-toggle="modal" data-bs-target="#<?=$firstname?>">
                         Profil</button>
                    </div>
               </div>
               <?php }?>
               <!----------------------------------------------------modal---------------------------------------------------------------------->
               <div class="modal fade" id="<?=$firstname?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog text-white" role="document">
                         <div class="modal-content d-flex justify-content-center text-center p-5" id="gradient-bg">
                              <div class="p-5 border border-white">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <img src="../assets/img/<?=$photo?>" class="d-block w-100">
                                        </div>
                                        <div class="col-md-6">
                                             <img src="../assets/img/user.png" class="w-100">
                                             <p><?= $firstname ?>, <?= $age ?> ans</p>
                                             <div class="row">
                                                  <div class="col-5">
                                                       <img src="../assets/img/location.png" class="w-100">
                                                  </div>
                                                  <div class="col-7">
                                                       <p><?= $zipCode ?></p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <h5>Description : </h5>
                                        <p><?= $description ?></p>
                                   </div>
                                   <div class="d-flex justify-content-end">
                                        <span id="btnLike" class="btn btn-outline-light btnCustom">Like</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
     <?php }
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     /////////////////////////////////////////////////////////////LOVERS HOMME/////////////////////////////////////////////////////////////////////
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     }elseif($_COOKIE['search'] == 'Homme'){
          foreach($loversHomme as $key => $infos){
               $photo = $infos['picture'];
               $lastname = $infos['lastname'];
               $firstname = $infos['firstname'];
               $age = $infos['age'];
               $zipCode = $infos['zipcode'];
               $description = $infos['description'];
               if($key == 0){?>
                    <div class="carousel-item active">
                         <img src="../assets/img/<?= $photo ?>" class=" carouselImage img-fluid d-block w-100">
                         <div class="carousel-caption">
                              <h5><?=$firstname?>, <?=$age?></h5>
                              <button type="button" class="btn btn-outline-light" id="button"
                                                       data-bs-toggle="modal" data-bs-target="#<?= $firstname ?>">
                              Profil</button>
                         </div>
                    </div>
               <?php 
               }else{
               ?>
               <div class="carousel-item">
                    <img src="../assets/img/<?= $photo ?>" class=" carouselImage img-fluid d-block w-100">
                    <div class="carousel-caption">
                         <h5><?=$firstname?>, <?=$age?></h5>
                         <button type="button" class="btn btn-outline-light" id="button"
                                                    data-bs-toggle="modal" data-bs-target="#<?=$firstname?>">
                         Profil</button>
                    </div>
               </div>
               <?php }?>
               <!----------------------------------------------------modal---------------------------------------------------------------------->
               <div class="modal fade" id="<?=$firstname?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog text-white" role="document">
                    
                         <div class="modal-content d-flex justify-content-center text-center p-5" id="gradient-bg">
                              <a class="text-right justify-content-end btn btn-outline-light btnCustom" data-bs-dismiss="modal">x</a>
                              <div class="p-5 border border-white">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <img src="../assets/img/<?=$photo?>" class="d-block img-fluid w-100">
                                        </div>
                                        <div class="col-md-6">
                                             <a> </a>
                                             <img src="../assets/img/user.png" class="d-block img-fluid w-100">
                                             <p><?= $firstname ?>, <?= $age ?> ans</p>
                                             <div class="row">
                                                  <div class="col-4">
                                                       <img src="../assets/img/location.png" class="d-block  img-fluid w-100">
                                                  </div>
                                                  <div class="col-8">
                                                       <p><?= $zipCode ?></p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <h5>Description : </h5>
                                        <p><?= $description ?></p>
                                   </div>
                                   <div class="d-flex justify-content-end">
                                        <span id="btnLike" class="btn btn-outline-light btnCustom">Like</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
     <?php } ?>
<?php
   }
?>
<script src="../assets/js/main.js"></script>