<?php
  require_once('conn.php');
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    
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
            <form method="post" id="logForm" style="font-weight: bold;color: black;">
                <h2 style="text-align: center;">Login Owner</h2>
                <hr>
                <div class="form-group has-feedback">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control textbox" id="username" name='user'>
                    <i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="pass">Password :</label>
                    <input type="password" class="form-control textbox" id="pass" name='pass'>
                    <i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name='remember'>Remember Me</label>
                </div>
                <a href="forgotpassword.html" style="margin-left: 160px;font-size: 12px;">Forgot password?</a><br>
                <button type="submit" class=" btn btn-warning" style="width:280px;" name='btnlogin'>Login</button>
                <hr>
                <p style="color:black;font-weight: bold;">Don't have a Cookie account? <a href="register.php">Sign Up</a></p>
                <p style="color:black;font-weight: bold;">Login Employee <a href="logink.php">Here</a></p>
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

    <script type="text/javascript">
      $(document).ready(function () {
        $('.text-danger').hide();
        //untuk mengecek bahwa semua textbox tidak boleh kosong
        $('input').each(function(){ 
          $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
            if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
              return get_error_text(this); //function get_error_text ada di bawah
            } else {
              $(this).removeClass('no-valid'); 
              $(this).parent().find('.text-danger').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
              $(this).closest('div').removeClass('has-warning');
              $(this).closest('div').addClass('has-success');
              $(this).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-warning-sign');
              $(this).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-ok');
            }
          });
        });

        $('#logForm').submit(function(e) {
          e.preventDefault();
          $.ajax({
            url: "ceklogin.php",
						type: "POST",
						data: $('#logForm').serialize(),
            success: function (res) {
              if (res == 'username') {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Username tidak dapat kami temukan',
                  footer: '<a href=register.php>Belum memiliki akun?</a>'
                })
              }else if (res == 'pass') {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Password yang anda masukkan salah',
                })
              }else if (res == 'g') {
                Swal.fire({
                    icon: 'success',                            
										title: 'Login berhasil',
										timer: 2000,
										timerProgressBar: true,                            
										onClose: () => {                              
										window.location.replace('backend(gold).html')
										}
								});
              }else if (res == 's') {
                Swal.fire({
                    icon: 'success',                            
										title: 'Login berhasil',
										timer: 2000,
										timerProgressBar: true,                            
										onClose: () => {                              
										window.location.replace('laporan.php')
										}
								});
              }else if (res == 'd') {
                Swal.fire({
                    icon: 'success',                            
										title: 'Login berhasil',
										timer: 2000,
										timerProgressBar: true,                            
										onClose: () => {                              
										window.location.replace('backend(diamond).html')
										}
								});
              }
            }
          })
        })
      })
      function get_error_text(textbox){
        $(textbox).parent().find('.text-danger').text("");
        $(textbox).parent().find('.text-danger').text("* Text Box Ini Tidak Boleh Kosong");
        return apply_feedback_error(textbox);
      }

      function apply_feedback_error(textbox){
			$(textbox).addClass('no-valid'); //menambah class no valid
			$(textbox).parent().find('.text-danger').show();
			$(textbox).closest('div').removeClass('has-success');
			$(textbox).closest('div').addClass('has-warning');
			$(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
			$(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
		  }

      
    </script>
  
    
    </body>
  </html>
