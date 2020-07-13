<?php
    require_once "google_config.php";


    if(isset($_GET['code'])){
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
//        $_SESSION['access_token'] = $token;
    }
    else {
        header('Location: http://localhost:8080/vacancy');
        exit();
    }

    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();

    setcookie('email', $userData['email'], time() + 3000);
    setcookie('picture', $userData['picture'], time() + 3000);
    setcookie('gender', $userData['gender'], time() + 3000);
    setcookie('picture', $userData['picture'], time() + 3000);
    setcookie('givenName', $userData['givenName'], time() + 3000);
    setcookie('familyName', $userData['familyName'], time() + 3000);
    setcookie('id', $userData['id'], time() + 3000);

    header('Location: localhost:8080');
    exit();
