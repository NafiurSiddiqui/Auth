<?php

    session_start();

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="index.css">

      <script src="js/navHandler.js"></script>

      <title> Auth </title>
  </head>
  <body >

    <nav class="navbar " role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="../index.php">
          <img src="assets/logo.png" width="28" height="28">
          <p class="ml-1 has-text-weight-bold has-text-grey-dark is-size-5"> Angles Inc.</p>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item">
            Home
          </a>

          <a class="navbar-item">
            Documentation
          </a>

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              More
            </a>

            <div class="navbar-dropdown">
              <a class="navbar-item">
                About
              </a>
              <a class="navbar-item">
                Jobs
              </a>
              <a class="navbar-item">
                Contact
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
              </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
                <?php
                    if (isset($_SESSION["id"])) {
                      
                ?>
              <a class="button is-primary">
                <?php
                  echo $_SESSION["name"];
                ?>
              </a>
              <a href="includes/logout.inc.php" class="button is-light">
                Log Out
              </a>
                  <?php
                     } 
                     else 
                     {

                   ?>
                <a class="button is-primary">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light">
                Log in
              </a>

                  <?php
                    }
                  ?>
        </div>
      </div>
    </div>
  </div>
</nav>
