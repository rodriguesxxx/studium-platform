<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="icon" type="image/png" href="<?=$base?>/images/logo.png"/>
        <link rel="stylesheet" href="<?=$base?>/css/signin_signup.css">
        <link rel="stylesheet" href="<?=$base?>/css/msgs.css">

        <title>Studium - Change Password</title>
        <style>
            .signin-signup{
                background-color: #fff;
            }
            .signin-signup img{
                display: block;
                
            }
            @media (max-width:848px){
                .title{
                    font-size: 30px;
                }
            }
            @media (max-width:458px){
                .title{
                    font-size: 30px;
                }
            }
            @media (max-width:398px){
                .title{
                    font-size: 25px;
                }
            }
        
        </style>
    </head>
    <body>
        <div class="signin-signup">
                <!-- LOGIN -->
                    <form action="<?=$base?>/change" method="POST" class="sign-in-form">
                        <div class="msg-alert" style="display: <?php echo isset($error) ? 'block' : 'none' ?>">
                            <span class="ms error"><i class="icon icon-hand-paper-o"></i><?php echo $error;?></span>
                        </div>


                        <img class="logo" src="<?=$base?>/images/logo.png" alt="logo">
                        <h2 class="title" >Change Password</h2>
                        <div class="input-field">
                        <i class="fas fa-envelope"></i>
                            <input type="password" placeholder="New Password" name="password" value="<?php echo isset($email) ? $email : "" ?>" required>
                        </div>
                        <div class="input-field">
                        <i class="fas fa-envelope"></i>
                            <input type="password" placeholder="Confirm Password" name="conf-password" value="<?php echo isset($email) ? $email : "" ?>" required>
                        </div>
                        <input type="submit" value="CHANGE" class="btn">
                        
                    </form>
        </div>
    </body>

</html>