<?php

include './Layout/header.php';

    if(isset($_SESSION["id"])){

            $username = $_SESSION["name"];
            $userLogged = true;
        }else{
            $userLogged= false;
        }
        // return $userLogged;

?>

<section class="hero is-success">
  <div class="hero-body">
    <?php
        if(isset($_SESSION["id"])){

            $username = $_SESSION["name"];
        ?>

            <p class="title">
               Hello $username
            </p>

            <?php
            }else{

            ?>

            <p class="title">
               <?php
                var_dump($userLogged) ;
               ?>
                Plz login.
            </p>
            
          <?php
          
            }
          ?> 
    <p class="subtitle">
      test
    </p>
  </div>
</section>

