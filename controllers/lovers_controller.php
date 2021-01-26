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
   
   $lovers = [
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky'],
        ['lastname' => 'jacky', 'firstname' => 'jack', 'age' => '30', 'gender' => 'Homme', 'email' => 'jackylover@hotmail.fr', 'zipcode' => '76600', 'picture' => 'jacky.png', 'description' => 'Je suis homme nommé Jacky']
   ]
  
?>
