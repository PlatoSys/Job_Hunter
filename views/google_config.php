<?php
    session_start();
    require_once "../views/google-api-php-client-2.5.0/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("813019725656-3987mp8p75bdhaeq9biaop1jrpsp7hj0.apps.googleusercontent.com");
    $gClient->setClientSecret("y0fm27rlMZlQksyes005pUOQ");
    $gClient->setApplicationName("JH Login");
    $gClient->setRedirectUri("http://localhost:8080/g-callback");
    $gClient->addScope("https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/spreadsheets https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
