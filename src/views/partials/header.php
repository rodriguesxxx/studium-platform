<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= $base ?>/css/style.css">
    <title>Studium</title>
</head>

<body>
    
<header>
        <nav>
            <ul>
                <li><a href=""><img src="<?=$base?>/images/logo.png" alt="logo" class="logo"></a></li>
                <li> <button id="search_btn" class="tooltip" data-tooltip="Search"> <i class="fas fa-search    "></i> </button> </li>
                
                <li id="space2"></li>
                
                <li> <a class="tooltip active" data-tooltip="Home" href="<?=$base?>/home" id="home"> <i class="fas fa-home    "></i> </a> </li>
                <li> <a class="tooltip" data-tooltip="News" href="#" id="news"> <i class="fas fa-newspaper"></i></i> </a> </li>
                <li> <a class="tooltip" data-tooltip="Groups" href="#" id="group"> <i class="fas fa-user-friends    "></i> </a></li>
                <li id="space1"></li>
                <li> <a class="tooltip" data-tooltip="Add" href="#" id="btn_plus"><i class="fas fa-plus    "></i></a> </li>
                <li> <a class="tooltip" data-tooltip="Message" href="#" id="btn_msg"><i class="fab fa-facebook-messenger    "></i></a></li>
                <li> <button class="tooltip" data-tooltip="Notification" href="#" id="btn_bell"> <i class="fas fa-bell    "></i></a></li>
                <li><a class="tooltip" data-tooltip="Profile" href="<?=$base?>/profile" id="btn_profile"><i class="fas fa-user-cog"></i></a></li>
            </ul>
        </nav>
    </header>