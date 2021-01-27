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
        ['lastname' => 'jacky1', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
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
   }elseif($_COOKIE['search'] == 'Homme'){
          foreach($loversHomme as $order => $value){
               echo '<div class="card">';
               foreach($value as $key => $infos){ 
                    if($key == 'picture'){ echo '<img src="../assets/img/' .$infos .'" alt="photo de profil" class="card-img-top">';}
                    if($key == 'firstname'){ echo '<div class="card-body"><h5 class="card-title">'. $infos;}
                    if($key == 'age'){echo '  '.$infos.'</h5></div>';}
               }
               echo '</div>';
          }
   }

   
  
?>
