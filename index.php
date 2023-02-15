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
  <body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
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




    <section class="index-login">
    <!-- signup -->

        <form class="index-login-signup card has-background-light" action="includes/signup.inc.php" method="post">
            <div class="index-login card-content">
                <h1 class="mb-3 is-size-4 has-text-grey">Sign up</h1>
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="Name" name="name">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
                </div>

                <!-- Email -->
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email" name="email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>

                    </p>
                </div>

                <!-- pass -->
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password" name="pass">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>

                <!-- re-pass -->
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Repeat Password" name="repass">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>

                <div class="control mt-4">
                    <button type="submit" name="submit" class="button is-primary">Submit</button>
                </div>
            </div>
        </form>
        <!-- login -->
        <form class="index-login-login card has-background-light mt-4" action="includes/login.inc.php" method="post">
            <div class="index-login card-content">
                <h1 class="mb-3 is-size-4 has-text-grey">Login</h1>
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="Name" name="name">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
                </div>


                <!-- pass -->
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password" name="pass">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>



                <div class="control mt-4">
                    <button type="submit" name="submit" class="button is-primary">Login</button>
                </div>
            </div>
        </form>

    </section>

<?php
// echo 'AUTH SYSTEM';
?>
</body>

</html>