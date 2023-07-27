<?php 
    include('../../crud/UserCrud.php');
    include('../../classes/Database.php');
    $user_crud = new UserCrud();

    if($_POST){
        $credential = $_POST['credential'];
        $isValid = $user_crud->isValidCredential($credential);
        if($isValid){
            $user_id = $user_crud->getIdByCredential($credential);
            $key_encrypted = rand(1000, 9999);
            $userID_encrypted = encrypted($user_id, $key_encrypted);
            header("Location: ../change/index.php?id=$userID_encrypted&key=$key_encrypted");
            exit;
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/msgs.css">
    <link rel="icon" type="image/png" href="../assets/images/logo.png"/>

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
            <!-- LOGIN -->
                <form method="POST" class="sign-in-form">
                    <div class="msg-alert" style="display: <?php echo (isset($isValid) && $isValid == false) ? 'block' : 'none' ?>">
                        <span class="ms error"><i class="icon icon-hand-paper-o"></i>Email/Username não encontrado</span>
                    </div>


                    <img class="logo" src="../assets/images/logo.png" alt="logo">
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
<?php
function encrypted($word, $key) {
    $iv = random_bytes(16); // Gerar um vetor de inicialização aleatório
    $encrypted = openssl_encrypt($word, 'AES-256-CBC', $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}
?>