<?php
    require_once('conn.php');
    if (isset($_POST['btnregister'])) {
        if($_POST['user']!=''&&$_POST['conpass']!=''&&$_POST['conpass']!=''&&$_POST['fullname']!=''&&$_POST['company']!=''&&$_POST['phone']!=''&&$_POST['email']!=''){
            $cekuser=false;
            $cekemail=false;
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $conpass=$_POST['conpass'];
            $nama=$_POST['fullname'];
            $company=$_POST['company'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            if($pass!=$conpass)echo "<script>alert('Password dan Confirm Password tidak sama !')</script>";
            else
            {
                $query="SELECT * from users where username='$user'";
                $res=mysqli_query($conn,$query);
                if($res->num_rows==0)
                {
                    $cekuser=true;
                    $queryemail="SELECT * from users where email='$email'";
                    $gas=mysqli_query($conn,$queryemail);
                    if ($gas->num_rows==0) {
                        $cekemail=true;
                    }
                    else echo "<script>alert('Email Sudah Digunakan!')</script>";    
                }
                else echo "<script>alert('Username Sudah Digunakan!')</script>";                               
            }
            if($cekuser&&$cekemail)
            {
                $pass=password_hash($pass,PASSWORD_DEFAULT);
                $queryinsert="INSERT into users values ('$user','$pass','$company','$nama','$email','$phone')";
                $execute=mysqli_query($conn,$queryinsert);
                // echo "<script>alert('Berhasil Register !')</script>";
                header('location:login.php');
            }            
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>CookiePOS-Register</title>
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

  
     
    <div class="site-blocks-cover"id="home-section">

      <div class="container"style="height:950px;width: 1000px;">
        <div class="row align-items-center justify-content-center">
            <div class="login" style="margin-top: 60px;">
            <form method="post" style="font-weight: bold;color:black;height: 2500px;transform: translateY(50px);">
                <h2 style="text-align: center;">Register</h2>
                <hr>
                <div class="form-group">
                    <label for="fullname">Full Name :</label>
                    <input type="text" class="form-control" id="fullname" style="width: 500px;" name=fullname required value=<?php if(isset($nama)) echo $nama ?>> 
                </div>
                <div class="form-group">
                    <label for="companyname">Company Name :</label>
                    <input type="text" class="form-control" id="companyname"style="width: 500px;" name=company required value=<?php if(isset($company)) echo $company ?>>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email"style="width: 500px;" name=email required value=<?php if(isset($email)) echo $email ?>>
                </div>
                <div class="form-group">
                    <label for="telp">Phone Number :</label>
                    <input type="number" class="form-control" id="telp"style="width: 500px;" name=phone required value=<?php if(isset($phone)) echo $phone ?>> 
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username"style="width: 500px;" name=user required value=<?php if(isset($user)) echo $user ?>>
                </div>
                <div class="form-group">
                    <label for="pass">Password :</label>
                    <input type="password" class="form-control" id="pass"style="width: 500px;" name=pass required value=<?php if(isset($pass)) echo $pass ?>>
                </div>
                <div class="form-group">
                    <label for="conpass">Confirm Password :</label>
                    <input type="password" class="form-control" id="conpass"style="width: 500px;"name=conpass required value=<?php if(isset($conpass)) echo $conpass ?>>
                </div>
                <hr>
                <div class="row">
                    <button type="submit" class="btn btn-warning btn-sm" style="transform: translateX(380px);font-weight: bold;" name='btnregister'>Register</button>
                    <p style="color:black;font-weight: bold;transform: translate(-110px,10px)">Already Have a Cookie account? <a href="login.php">Sign In</a></p>
                </div>
                
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