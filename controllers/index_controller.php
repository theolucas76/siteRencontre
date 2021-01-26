<?php 
   if(isset($_POST['btnSubmit'])){
     setcookie('lastname', $_POST['lastname'], time() + 86400);
     setcookie('firstname', $_POST['firstname'], time() + 86400);
     setcookie('age', $_POST['age'], time() + 86400);
     setcookie('gender', $_POST['gender'], time() + 86400);
     setcookie('zipCode', $_POST['zipCode'], time() + 86400);
     setcookie('email', $_POST['email'], time()+86400);
     setcookie('search', $_POST['search'], time()+86400);
     setcookie('profilPicture', $_FILES['profilPicture'], time()+86400);
   }elseif(isset($_COOKIE['lastname'])){
      header("location: views/lovers.php");
   }
?>