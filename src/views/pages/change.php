<?php
    include('../../crud/UserCrud.php');
    include('../../classes/Database.php');
    $user_crud = new UserCrud();
    if($_POST){
        if($_GET){
            $userID_encrypted = $_GET["id"];
            $key = $_GET["key"];
            $user_id = descrypted($userID_encrypted, $key);
            if($user_crud->isValidId($user_id)){
                $passwd = $_POST['passwd'];
                $conf_passwd = $_POST['conf-passwd'];
                if($passwd == $conf_passwd){
                    if($user_crud->updatePassword($user_id, $passwd)){
                        header("Location: ../signin_and_signup");
                        exit;
                    }
                    else{
                        $error = "Error interno, tente novamente mais tarde!";
                    }
                }
                else{
                    $error = "Senhas Diferentes!";
                }
            }
            else{
                $error = "URL expirada.";
            }
        }
        else{
            $error = "INVALID URL";
        }
    }
    


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/msgs.css">
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>

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
                    <form method="POST" class="sign-in-form">
                        <div class="msg-alert" style="display: <?php echo isset($error) ? 'block' : 'none' ?>">
                            <span class="ms error"><i class="icon icon-hand-paper-o"></i><?php echo $error;?></span>
                        </div>


                        <img class="logo" src="../assets/images/logo.png" alt="logo">
                        <h2 class="title" >Change Password</h2>
                        <div class="input-field">
                        <i class="fas fa-envelope"></i>
                            <input type="password" placeholder="New Password" name="passwd" value="<?php echo isset($email) ? $email : "" ?>" required>
                        </div>
                        <div class="input-field">
                        <i class="fas fa-envelope"></i>
                            <input type="password" placeholder="Confirm Password" name="conf-passwd" value="<?php echo isset($email) ? $email : "" ?>" required>
                        </div>
                        <input type="submit" value="CHANGE" class="btn">
                        
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
<?php 
    function descrypted($word, $key) {
        $data = base64_decode($word);
        $iv = substr($data, 0, 16); // Extrair o vetor de inicialização
        $data = substr($data, 16); // Extrair os dados criptografados
        return openssl_decrypt($data, 'AES-256-CBC', $key, 0, $iv);
    }

?>