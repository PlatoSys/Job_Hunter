<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body>


<div class="container">

    <header>
        <div class="header-nav">

            <div class="header-logo">
                <h>ლოგო</h>
                <!-- <img src="44821593_303.png" width="300" height="100"> -->
            </div>
            <div class="about">
                <div class="about-us">
                    <a href="about"> <h1>ჩვენს შესახებ</h1> </a>
                </div>
                <div class="info">
                    <a href="addvacancy"> <h1>განცხადების დამატება</h1> </a>
                </div>        
            </div>

            <div class="authentification">
                <div class="icons">
                    <a href="facebook.com"><img src="/Images/f_logo_RGB-Hex-Blue_512.png" width="35px" height="35px"> </a>
                    <a href="google.com"> <img src="/Images/google-logo-icon-PNG-Transparent-Background.png" width="35px" height="35px"> </a>
                </div>
            </div>
            <?php
            $user = 0;
            if($user == 1) {
                echo "
                            <div class='user-field'>
                <div class='user-pic'>
                    <img src='44821593_303.png' width='100' height='100'>
                </div>
                <div class='user-name'>
                    <h1>User</h1>
                </div>
            </div>";
            } else
                echo "
                
                <button type=\"button\" class=\"btn btn-lg  btn-warning\">შესვლა</button>

                
                
                
                "
            ?>

        </div>
    </header>

    <div class="content">
        <div class="menu-nav">
        <div class="news-icon">
            <img src="Images/bell.png" width="40px" height="40px">
        </div>
            <ul>
                <li><div><a href="vacancy">ვაკანსიები</a></div><div class="active-color"></div></li>
                <li><div><a href="company">კომპანიები</a></div><div class="active-color"></div></li>
                <li><div><a href="saved">შენახული</a></div><div class="active-color"></div></li>
                <li><div><a href="subscribers">გამოწერები</a></div><div class="active-color"></div></li>
                <li><div><a href="news">სიახლე</a></div><div class="active-color"></div></li>

            </ul>      
        </div>
    </div>
    <div class="content">
        <?php echo $content ?>
    </div>

</div>



</body>
</html>
