<?php
    require_once "google_config.php";
    $loginURL = $gClient->createAuthUrl();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <div class="g-signin2" data-onsuccess="onSignIn">
        <input type="button" onclick="window.location = '<?php  echo $loginURL; ?> '" class="btn btn-primary btn-lg btn-block" value="Login Via Google">
    </div>


</form>
</body>
</html>
