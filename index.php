<?php
    include './Layout/header.php';
    
    if(isset($_GET["error"])){

        if($_GET["error"]== 'emptyInputs'){

            $emptyInputs = isset($_GET["emptyInputs"]) ? $_GET["emptyInputs"]:'';
            $emptyName =  $_GET['emptyName'];
            $emptyPass=$_GET['emptyPass'] ;
        }
    }

?>

   <div class="hero-body">
     <section class="index-login columns ">
        <!-- signup -->
        <div class="column is-align-items-flex-end">
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
        </div>
        <!-- login -->
       <div class="column is-align-items-flex-end">
         <form class="index-login-login card has-background-light" action="includes/login.inc.php" method="post">
            <div class="index-login card-content">
                <h1 class="mb-3 is-size-4 has-text-grey">Login</h1>
                <div class="field">
                    <div class="control is-expanded has-icons-left">
                        <input class="input 
                        <?php
                            echo $emptyName? "is-danger":null;
                        ?>
                        " type="text" placeholder="Name" name="name">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>

                    <span>
                        <?php
                            echo !empty($emptyName)? $emptyName: null;
                        ?>
                    </span>
                </div>


                <!-- pass -->
                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input 
                         <?php
                            echo $emptyPass? "is-danger":null;
                        ?>
                        " type="password" placeholder="Password" name="pass">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>

                    <p>
                        <?php
                            echo !empty($emptyPass)? $emptyPass: null;
                        ?>
                    </p>
                </div>



                <div class="control mt-4">
                    <button type="submit" name="submit" class="button is-primary">Login</button>
                </div>
            </div>
        </form>
       </div>

    </section>
   </div>


</body>

</html>