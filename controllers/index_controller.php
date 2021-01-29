<?php 
     if(isset($_COOKIE['lastname'])){
          setcookie('lastname', $_POST['lastname'], time() - 1);
          setcookie('firstname', $_POST['firstname'], time() - 1);
          setcookie('age', $_POST['age'], time() - 1);
          setcookie('gender', $_POST['gender'], time() - 1);
          setcookie('zipCode', $_POST['zipCode'], time() - 1);
          setcookie('email', $_POST['email'], time()- 1);
          setcookie('search', $_POST['search'], time() - 1);
          move_uploaded_file($_FILES['profilPicture']['tmp_name'], '../assets/img/' . basename($_FILES['profilPicture']['name']));
          $imgProfile = $_FILES['profilPicture']['name'];
          setcookie('profilPicture', $imgProfile, time()-1);
     }
?>