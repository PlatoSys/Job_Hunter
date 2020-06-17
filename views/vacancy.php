<?php


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
    <?php foreach ($vacancies as $num => $query) : ?>
         <?php echo  '<div class="vacancy-container">' ?>
            <?php echo  '<div class="vacancy">' ?>
            <?php echo   '<div class="side-left">' ?>
            <?php echo  '<div class="logo-place">' ?>
            <?php echo   '<img src="/views/logos/TEST.png" width="100" height="100">' ?>
            <?php echo    '</div>' ?>
            <?php echo    '<div class="information">' ?>
            <?php echo                '<div class="position">' ?>
            <?php echo                     " <h1>$query[VacancyName]</h1>"?>
            <?php echo                  '</div>' ?>
            <?php echo                  '<div class="pos">' ?>
            <?php echo                     ' <h1>Medical Society</h1>' ?>
            <?php echo                 ' </div>' ?>
            <?php echo                  '<div class="city">' ?>
            <?php echo                      "<h1>$query[City]</h1>" ?>
            <?php echo                 ' </div>' ?>
            <?php echo                  '<div class="salary">' ?>
            <?php echo                      "<h1 class='money'>$query[Salary] $</h1>" ?>
            <?php echo                  '</div>' ?>
            <?php echo                  '<div class="condition">' ?>
            <?php echo                      '<h1 class="condition-effect">New</h1>' ?>
            <?php echo                  '</div>' ?>
            <?php echo              '</div>' ?>
            <?php echo          '</div>' ?>
            <?php echo          '<div class="side-right">' ?>
            <?php echo             ' <div class="liker">' ?>
            <?php echo                  '<h1>Temp</h1>' ?>
            <?php echo             ' </div>' ?>
            <?php echo             ' <div class="time">' ?>
            <?php echo                  '<h1>23h</h1>' ?>
            <?php echo             ' </div>
                    </div>
                </div>
                <hr>
            </div>' ?>
    <?php endforeach; ?>


</body>



</html>
