<?php

include './Layout/header.php';

    if(isset($_SESSION["id"])){

            $username = $_SESSION["name"];
            $userLogged = true;
        }else{
            $userLogged= false;
        }
       

?>

<section class="section is-large 

has-background-<?php
echo $userLogged ? 'primary':'warning';
?>
">
  
  <h1 class="title is-size-1 ">
    <?php
        echo $userLogged? "Hello $username": "Login";
    ?>
  
  </h1>
  <h2 class="subtitle pt-1">
    <?php
        echo $userLogged? "Thank you for loggin in": "Sign-up to get the best angles.";
    ?>
  </h2>
</section>

