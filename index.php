
    <?php
        include 'Layout/header.php';
    ?>
    <section class="index-login">
        
        <form class="index-login-signup card has-background-light">
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
                    <input class="input" type="password" placeholder="Repeat Password" name="passRepeat">
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>

            <div class="control mt-4">
                <button class="button is-primary">Submit</button>
                </div>
          </div>
        </form>

          <form class="index-login-login card has-background-light mt-4">
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
                <button class="button is-primary">Login</button>
                </div>
          </div>
        </form>
    </section>

    <?php
        // echo 'AUTH SYSTEM';
    ?>
</body>
</html>