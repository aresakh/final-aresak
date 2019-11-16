<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WELLCOME TO OUR WORD</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="https://www.pikpng.com/pngl/m/52-520609_football-ball-png-3d-soccer-ball-clipart-transparent.png"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS32VHLqk0M_Rgx1YMihmuaJxjREKYX0d0OiOfnKM7DnkR5rTXi);
                color: rgb(255, 255, 255);
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0 auto;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: rgb(255, 255, 255);
                padding: 0 25px;
                font-size: 20px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    font-family: Arial, Helvetica, sans-serif;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
        </style>
    </head>
    
    <body>

    <div class="topnav">
        
    <a class="active" href="#home">HOME</a>
    <a href="//sak.php">ABOUE US</a>
    <a href="#contact">CONTACT</a>
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
    </div>
    
    
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    WELLCOME TO OUR WEBSTE
                </div>

                <div class="links">
                    
                    <a href="https://laravel-news.com">LOG IN</a>
                    <a href="https://blog.laravel.com">SING IN</a>
                    <a href="https://nova.laravel.com">CONTACT US</a>
                    
                </div>
            </div>
        </div>

   <!-- Footer -->
<footer class="page-footer font-small teal pt-4">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">MY PERSONAL INFORMATION</h5>
      <p>My name is Arsah pok-adek. but everyone calls me Asak is my nickname. 
        i am the last yeas IT sudent of Fatoni University. This is just basic
        wed page forme for begining to be profesional of web pro gramming. 
        i am so glad to stady this subject.
      </p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-6 mb-md-0 mb-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">ABOUTE THE SUBJECT</h5>
      <p>This webpage is a part of Independent study. I got Many things for this
        Subject. exspecially aboute LARAVEL. it makes me easy to create a good website
        by using a fewtime to finihs is than you for reading
      </p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Text -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\newlaravel\resources\views/welcome.blade.php ENDPATH**/ ?>