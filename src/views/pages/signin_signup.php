<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <link rel="icon" type="image/png" href="<?=$base?>/images/logo.png"/>
    <link rel="stylesheet" href="<?=$base?>/css/signin_signup.css">
    <link rel="stylesheet" href="<?=$base?>/css/msgs.css">
    

    <title>Studium - Signin and Signup</title>
</head>

<body>
    <div class="container">
     
        <div class="signin-signup">
        <!-- LOGIN -->
            <form action="<?=$base?>/login" method="POST" class="sign-in-form" >
            
                <div class="msg-alert" style="display: <?php echo (isset($error)) ? 'block' : 'none' ?>" >
                    <span class="ms error"><i class="icon icon-hand-paper-o"></i><?php echo $error ?></span>
                </div>

                <img class="logo-mobile" src="<?=$base?>/images/logo.png" alt="logo">
                <h2 class="title">Sign in</h2>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email or Username" name="credential" value="<?php echo isset($errorLoginInfo) ? $errorLoginInfo['credential'] : ''?>" required>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>

                <a href="<?=$base?>/forgot" id="forgot-btn">Forgot Password?</a>

                <input type="submit" value="Login" class="btn">
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>

            <!-- CADASTRO -->
            <form action="<?=$base?>/register" method="POST" class="sign-up-form">
            <img class="logo-mobile" src="<?=$base?>/images/logo.png" alt="logo">


                <h2 class="title">Sign up</h2>         
                <div class="input-field">
                    <i class="fas fa-address-card"></i>
                    <input type="text" placeholder="Your name" name="name"  value="<?php echo isset($errorRegisterInfo) ? $errorRegisterInfo['name'] : ''?>" required>
                </div>

                <div class="input-field">
                    <i class="fas fa-user-tag"></i>
                    <input type="text" placeholder="Your username" name="username"  value="<?php echo isset($errorRegisterInfo) ? $errorRegisterInfo['username']  : ''?>" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Best Email" name="email" value="<?php echo isset($errorRegisterInfo) ? $errorRegisterInfo['email'] : ''?>" required>
                </div>
            
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <input type="submit" value="Sign up" class="btn">
                
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                <img src="<?=$base?>/images/logo.png" alt="logo">
                    

                    <h3>Member of Studium?</h3>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                <img src="<?=$base?>/images/logo.png" alt="logo">

                    <h3>New to Studium?</h3>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
  
    <script src="<?=$base?>/js/signin_signup.js"></script>
</body>

</html>


