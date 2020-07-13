<?php
function dateDiffInDays($date1, $date2)
{
    // Calculating the difference in timestamps
    $diff = strtotime($date2) - strtotime($date1);

    // 1 day = 24 hours
    // 24 * 60 * 60 = 86400 seconds
    return abs(round($diff / 86400));
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/797356307c.js"></script>
    <script src="../public/DOM.js"></script>
</head>
<body>
    <script>

        function HeartToggle($current){

            let btn = document.getElementById($current);
            console.log($current);
            if(btn.classList.contains("far")){
                btn.classList.remove("far");
                btn.classList.add("fas");
            }
            else {
                btn.classList.remove("fas");
                btn.classList.add("far");
            }
        }

    </script>
    <?php foreach ($vacancies as $num => $query) : ?>
         <?php echo  '<div class="vacancy-container">' ?>
            <?php echo  '<div class="vacancy">' ?>
            <?php echo   '<div class="side-left">' ?>
            <?php echo  '<div class="logo-place">' ?>
            <?php echo   "<img src='/Companylogos/$query[CompanyName].png'   width='100' height='100'>" ?>
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
            <?php echo                      "<h1 class='money'>$query[Salary]</h1>" ?>
            <?php echo                  '</div>' ?>
            <?php echo                  '<div class="condition">' ?>
            <?php echo                      '<h1 class="condition-effect">';?><?php if($query['Status'] == 1) echo 'Hot'; elseif ($query['VacancyStartDate'] == date("Y-m-d")) echo 'New' ; ?> <?php echo '</h1>' ?>
            <?php echo                  '</div>' ?>
            <?php echo              '</div>' ?>
            <?php echo          '</div>' ?>
            <?php echo          '<div class="side-right">' ?>
            <?php echo             ' <div class="liker">' ?>
            <?php echo                  "<div class='heart-container'>
            <i id=$query[VacancyID] onclick='HeartToggle(id)' class='far fa-heart'></i>
        </div>"?>
            <?php echo             ' </div>' ?>
            <?php echo             ' <div class="time">' ?>
            <?php echo                  '<h1>';?><?php if($query['VacancyStartDate'] == date("Y-m-d")) echo "1 Day"; else echo dateDiffInDays($query['VacancyStartDate'],date("Y-m-d")) . ' Day' ?> <?php echo '</h1>' ?>
            <?php echo             ' </div>
                    </div>
                </div>
                <hr>
            </div>' ?>
    <?php endforeach; ?>


</body>

</html>
