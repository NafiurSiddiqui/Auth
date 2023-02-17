<?php
include './Layout/header.php';

if (isset($_GET["error"])) {

    $emptyName = isset($_GET['emptyName']) ? $_GET["emptyName"] : '';
    $emptyPass = isset($_GET["emptyPass"]) ? $_GET['emptyPass'] : '';
    $emptyInput = $_GET['error'] == 'emptyinput' ? $_GET['error'] : '';
    $invalidUserName = $_GET['error'] == 'invalidusername' ? $_GET['error'] : '';
    $passMismatched = $_GET['error'] == 'passworddoesnotmatch' ? $_GET['error'] : '';
}

if (isset($_GET["message"])) {

    $signupSucceed = $_GET["message"] == 'signupSucceed' ? $_GET["message"] : '';
}

?>
<div class="modal 
<?php
echo !empty($signupSucceed) ? 'is-active' : null;
?>
">
    <div class="modal-background"></div>
    <div class="modal-content ">

        <div class="notification is-primary is-light has-text-centered has-text-weight-semibold is-size-4">
            🥳 Successfully signed up! 🥳
        </div>

    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>


<div class="hero-body ">

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
                        <p class="mt-2 is-size-7 has-text-danger">
                            <?php
                            echo !empty($invalidUserName) ? "Invalid UserName. Allowed [a-z, 0-9]" : null;


                            ?>
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
                        <p class="mt-2 is-size-7 has-text-danger">
                            <?php
                            echo !empty($passMismatched) ? "password does not match!" : null;


                            ?>
                        </p>
                    </div>

                    <p class="mt-2 is-size-7 has-text-danger">
                        <?php
                        echo !empty($emptyInput) ? $emptyInput : null;


                        ?>
                    </p>

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
                        echo !empty($emptyName) ? 'is-danger' : null;

                        ?>
                        " type="text" placeholder="Name" name="name">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>

                        <p class="mt-2 is-size-7 has-text-danger">
                            <?php
                            echo !empty($emptyName) ? $emptyName : null;

                            ?>
                        </p>
                    </div>


                    <!-- pass -->
                    <div class="field">

                        <div class="control has-icons-left">
                            <input class="input
                         <?php
                            echo !empty($emptyPass) ? "is-danger" : null;
                            ?>
                       
                        " type="password" placeholder="Password" name="pass">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>

                        <p class="mt-2 is-size-7 has-text-danger "> <?php
                                                                    echo !empty($emptyPass) ? $emptyPass : null;
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