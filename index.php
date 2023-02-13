<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="index.css">
    
    <title> Auth </title>
</head>
<body>

    <section class="index-login">
        
        <article class="index-login-signup card has-background-light">
            <div class="index-login card-content">
              <h1 class="mb-2 is-size-4 has-text-grey">Sign up</h1>
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="Name">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>

            <!-- Email -->
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                
                </p>
            </div>

            <!-- pass -->
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>

            <!-- re-pass -->
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Re-type Password">
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>

            <div class="control mt-4">
                <button class="button is-primary">Submit</button>
                </div>
          </div>
        </article>
    </section>

    <?php
        // echo 'AUTH SYSTEM';
    ?>
</body>
</html>