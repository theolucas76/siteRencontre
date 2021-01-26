<?php 
   if(isset($_POST['btnSubmit'])){
     setcookie('lastname', $_POST['lastname'], time() + 86400);
     setcookie('firstname', $_POST['firstname'], time() + 86400);
     setcookie('age', $_POST['age'], time() + 86400);
     setcookie('gender', $_POST['gender'], time() + 86400);
     setcookie('zipcode', $_POST['zipcode'], time() + 86400);
     setcookie('mail', $_POST['mail'], time()+86400);
     setcookie('search', $_POST['search'], time()+86400);
     setcookie('description', $_POST['description'], time()+86400);
   }elseif(isset($_COOKIE['lastname'])){
      header("location: views/lovers.php");
   }
?>