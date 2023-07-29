

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <link rel="icon" type="image/png" href="<?=$base?>/assets/images/logo.png"/>
    <link rel="stylesheet" href="<?=$base?>/css/signin_signup.css">
    <link rel="stylesheet" href="<?=$base?>/css/msgs.css">
    

    <title>Studium - Fotgot Password</title>
    <style>
        body{
            background-color: #fff;
        }
        .signin-signup img{
            display: block;
        }
        .signin-signup{
            background-color: #fff;
        }
        
    </style>
</head>
<body">
    <div class="signin-signup">
            <!-- FORGOT -->
                <form method="POST" class="sign-in-form">
                    <div class="msg-alert" style="display: <?php echo (isset($isValid) && $isValid == false) ? 'block' : 'none' ?>">
                        <span class="ms error"><i class="icon icon-hand-paper-o"></i>Email/Username não encontrado</span>
                    </div>


                    <img class="logo" src="<?=$base?>/assets/images/logo.png" alt="logo">
                    <h2 class="title">Receive Link</h2>
                    <div class="input-field">
                    <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email or Username" name="credential" value="<?php echo isset($credential) ? $credential : "" ?>" required>
                    </div>
                    <input type="submit" value="SEND" class="btn">
                    
                </form>
    </div>
    <script>
    <?php 
        if (isset($isValid)) { ?>
            setTimeout(function() {
                window.location.href = window.location.href; // Redireciona para a mesma página
            }, 2000); 
        <?php } ?>   
    </script>
</body>

</html>
