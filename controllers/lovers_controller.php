<?php 
    if(isset($_POST['lastname'])){

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

   }elseif(isset($_COOKIE['lastname'])){
        header("location: views/lovers.php");
   }
   
   $loversHomme = [
        ['lastname' => 'jacky1', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'ppb1.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky2', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky3', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky']
   ];

   $loversFemme = [
     ['lastname' => 'jackye', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jackye', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jackye', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
     ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky']
   ];

   if($_COOKIE['search'] == 'Femme'){
          foreach($loversFemme as $order => $value){
               foreach($value as $key => $infos){
                    /*?>
                    <div class="row">
                         <div class="col-md-3">
                              <div class="card">
                                   <img src="../assets/img/<?php if($key == 'picture'){ echo $infos;} ?>" alt="photo de profil" class="card-img-top">
                                   <div class="card-body">
                                        <h5 class="card-title"><?php if($key == 'firstname'){echo $infos;}?> <?php if($key == 'age'){echo $infos;}?></h5>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <?php*/
               }
          }
   }elseif($_COOKIE['search'] == 'Homme'){?>
               <div class="row justify-content-center my-3" id="menProfiles">
                <div class="col-lg-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
          
          <?php 
          foreach($loversHomme as $key => $infos){
               $photo = $infos['picture'];
               $lastname = $infos['lastname'];
               $firstname = $infos['firstname'];
               $age = $infos['age'];?>
               
               <div class="carousel-item">
                    <img src="../assets/img/<?= $photo ?>" class=" carouselImage d-block w-100">
               </div>



     <?php } ?>
     </div>
                    </div>
                </div>
            </div>
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
<?php
   }
?>
