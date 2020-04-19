<?php
    require_once('conn.php');
    if(isset($_POST['btnlogin']))
    {
        if($_POST['user']!=''&&$_POST['pass']!='')
        {
            $cekuser=false;
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $query='SELECT * from users';
            $res=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($res)) {
                if($row['username']==$user)
                {
                    $cekuser=true;
                    if(password_verify($pass,$row['password']))
                    {
                        echo "<script>alert('berhasil login')</script>";
                    }
                    else echo "<script>alert('Password Salah')</script>";
                    
                }
            }
            if(!$cekuser)
            {
                echo "<script>alert('username tidak ditemukan')</script>";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CookiePOS-Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <!--NAVBAR-->
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background-color: rgb(158, 239, 241);">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo">
              <a href="index.html" class="h2 mb-0">
                <img src="logo(trans).png" alt="logo" style="width: 80px;height: 90px;transform: translateY(20px);">
            </a>
          </h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block text-black">
                <li><a href="login.php" class="nav-link">Login</a></li>
                <li class="has-children">
                  <a href="packages.html" class="nav-link">Packages</a>
                  <ul class="dropdown">
                    <li><a href="silver.html" class="nav-link">Silver</a></li>
                    <li><a href="gold.html" class="nav-link">Gold</a></li>
                    <li><a href="diamond.html" class="nav-link">Diamond</a></li>
                    </ul>
                </li>
                
                
                <li><a href="summary.html" class="nav-link">Summary</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover"   id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="login" style="margin-top: 60px;">
            <form method="post" style="font-weight: bold;color: black;">
                <h2 style="text-align: center;">Login</h2>
                <hr>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name='user' required>
                </div>
                <div class="form-group">
                    <label for="pass">Password :</label>
                    <input type="password" class="form-control" id="pass" name='pass' required>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name='remember'>Remember Me</label>
                </div>
                <a href="forgotpassword.html" style="margin-left: 160px;font-size: 12px;">Forgot password?</a><br>
                <button type="submit" class=" btn btn-warning" style="width:280px;" name='btnlogin'>Login</button>
                <hr>
                <p style="color:black;font-weight: bold;">Don't have a Cookie account? <a href="register.php">Sign Up</a></p>
            </form>
            </div>
        </div>
      </div>

     

      <footer class="site-footer">
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p>Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart-o" aria-hidden="true"></i>
            </p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
  </footer>
    </div>  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
  
    
    <script src="js/main.js"></script>
  
    
    </body>
  </html>
