<?php
//    echo '<pre>';
//    var_dump($_GET);
//    echo '<pre>';


?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                <?php if(isset($_COOKIE['id'])){
                    if($_COOKIE['id'] == 114551987610828307918) echo "<br><hr><a href='admin-panel'><h1>Admin</h1></a><hr>";
                    }; ?>
            </div>
            <?php
            if(isset($_COOKIE['email'])){
                echo " <div class='user-field'>
                <div class='user-pic'>" . "
                    <img src=" . $_COOKIE["picture"] . " width='100' height='100'>
                </div>
                <div class='user-name'>
                    <h1>". ucfirst($_COOKIE['givenName']) . "</h1>
                    

                </div>
                
                            <div class='logout'>
                            <div class='dropdown'>
                  <button class='btn btn-warning dropdown-toggle btn-lg' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    მენიუ
                  </button>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <a class='dropdown-item' href='#'>Action</a>
                    <a class='dropdown-item' href='#'>Another action</a>
                    <a class='dropdown-item' href='/logout'> გამოსვლა</a>
                  </div>
                </div>
            </div>
            </div>

            
            ";

            } else
                echo "
                
                <form  method='post'>
                    <input type=\"button\" class=\"btn btn-lg  btn-warning\" onclick=\"window.location = 'http://localhost:8080/login' \" class=\"btn btn-primary\" value='შესვლა'>
                </form>
                
                
            
                ";
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



<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
            </div>
            </hr>
        </div>
    </div>
</section>
<!-- ./Footer -->

</body>
</html>
