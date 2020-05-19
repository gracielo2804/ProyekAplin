<?php
		require_once('conn.php');		
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
    <!-- <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
    <script type="text/javascript" src="sweetalert/sweetalert.js"></script> -->
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
		<div class="site-blocks-cover"id="home-section">

			<div class="container"style="height:950px;width: 1000px;">
				<div class="row align-items-center justify-content-center">
						<div class="login" style="margin-top: 60px;">
						<form method="post" style="font-weight: bold;color:black;height: 2500px;" id='formInput' class='mt-5'>
								<h2 style="text-align: center;">Register</h2>
								<hr>
								<div class="form-group has-feedback">
										<label for="fullname">Full Name :</label>
										<input type="text" class="form-control textbox" id="fullname" style="width: 500px;" name=fullname  value=<?php if(isset($nama)) echo $nama ?>> 
										<i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
								</div>
								<div class="form-group has-feedback">
										<label for="companyname">Company Name :</label>
										<input type="text" class="form-control textbox" id="companyname"style="width: 500px;" name=company  value=<?php if(isset($company)) echo $company ?>>
										<i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
								</div>
								<div class="form-group has-feedback">
										<label for="email">Email :</label>
										<input type="email" class="form-control textbox"  id="email"style="width: 500px;" name=email  value=<?php if(isset($email)) echo $email ?>>
										<i class="form-control-feedback"></i>
										<span class="text-danger"></span>
								</div>
								<div class="form-group has-feedback">
										<label for="telp">Phone Number :</label>
										<input type="number" class="form-control textbox" id="telp"style="width: 500px;" name=phone  value=<?php if(isset($phone)) echo $phone ?>> 
										<i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
								</div>
								<div class="form-group has-feedback">
										<label for="username">Username :</label>
										<input type="text" class="form-control textbox" id="user"style="width: 500px;" name=user  value=<?php if(isset($user)) echo $user ?>>
										<i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
								</div>
								<div class="form-group has-feedback">
										<label for="pass">Password :</label>
										<input type="password" class="form-control textbox" id="pass"style="width: 500px;" name=pass  value=<?php if(isset($pass)) echo $pass ?>>
										<i class="form-control-feedback"></i>
										<span class="text-danger" ></span>
								</div>
								<div class="form-group has-feedback">
									<label for="conpass">Confirm Password :</label>
									<input type="password" class="form-control textbox" id="conpass"style="width: 500px;"name=conpass  value=<?php if(isset($conpass)) echo $conpass ?>>
									<i class="form-control-feedback"></i>
									<span class="text-danger" ></span>
								</div>
								<div class="form-group has-feedback">
									<label for="pack">Packages :</label>
									<select class="form-control select" id="pack"style="width: 500px;"name=pack>
										<option value="none">--Select Packages--</option>
										<option value="silver">Silver</option>
										<option value="gold">Gold</option>
										<option value="diamond">Diamond</option>
									</select>
									<i class="form-control-feedback"></i>
									<span class="text-danger" ></span>
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
			<footer class="site-footer mt-auto" style=transform:translateY(250px)>
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
		$(document).ready(function(){
			//semua element dengan class text-danger akan di sembunyikan saat load
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
			$('select').each(function(){ 
				$(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
					if ($(this).val()=='none'){ //this mengacu pada text box yang sedang fokus
						return get_error_text_select(this); //function get_error_text ada di bawah
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
			//mengecek textbox Username Valid Atau Tidak
			$('#user').blur(function(){
				var user= $(this).val();
				var len= user.length;
				if(len>0){ 																
					if (len>30){ 
						$(this).parent().find('.text-danger').text("");
						$(this).parent().find('.text-danger').text("Maximal Karakter 30");
						return apply_feedback_error(this);
					} 
					else {
						var valid = false;
						$.ajax({
						url: "checkuser.php",
						type: "POST",
						data: "user="+user,
						dataType: "text",
						success: function(data)
						{
							if (data==0){ //pada file check user.php, apabila user sudah ada di database makan akan mengembalikan nilai 0
								$('#user').parent().find('.text-danger').text("");
								$('#user').parent().find('.text-danger').text("username sudah digunakan");
								return apply_feedback_error('#user');
								}
						}
						});
					}								
				} 
			});

			$('#fullname').blur(function(){
				var nama= $(this).val();
				var len= nama.length;
				if(len>0){ //jika ada isinya
					if(!valid_nama(nama)){ //jika nama tidak valid
						$(this).parent().find('.text-danger').text("");
						$(this).parent().find('.text-danger').text("Nama Tidak Valid");
						return apply_feedback_error(this);
					} else {
						if (len>50){ //jika karakter >30
							$(this).parent().find('.text-danger').text("");
							$(this).parent().find('.text-danger').text("Maximal Karakter 50");
							return apply_feedback_error(this);
						}
					}
				} 
			});
			//mengecek Company Name
			$('#companyname').blur(function(){
				var nama= $(this).val();
				var len= nama.length;
				if(len>0){ //jika ada isinya
					if(!valid_nama(nama)){ //jika nama tidak valid
						$(this).parent().find('.text-danger').text("");
						$(this).parent().find('.text-danger').text("Nama Tidak Valid");
						return apply_feedback_error(this);
					} else {
						if (len>50){ //jika karakter >30
							$(this).parent().find('.text-danger').text("");
							$(this).parent().find('.text-danger').text("Maximal Karakter 50");
							return apply_feedback_error(this);
						}
					}
				} 
			});				
			$('#email').blur(function(){
				var email= $(this).val();
				var len= email.length;
				if(len>0){ 
					if(!valid_email(email)){ 
						$(this).parent().find('.text-danger').text("");
						$(this).parent().find('.text-danger').text("E-mail Tidak Valid (ex: aaaa@gmail.com)");
						return apply_feedback_error(this);
					} 
					else 
					{
						if (len>30){ 
							$(this).parent().find('.text-danger').text("");
							$(this).parent().find('.text-danger').text("Maximal Karakter 30");
							return apply_feedback_error(this);
						} 
						else 
						{
							var valid = false;
							$.ajax({
								url: "checkemail.php",
								type: "POST",
								data: "email="+email,
								dataType: "text",
								success: function(data)
								{
									if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
										$('#email').parent().find('.text-danger').text("");
										$('#email').parent().find('.text-danger').text("email sudah digunakan");
										return apply_feedback_error('#email');
									}
								}
							});
						}
					}
				} 
			});
			//mengecek password
			$('#pass').blur(function(){
				var password=$(this).val();
				var len=password.length;
				if (len>0 && len<8) {
					$(this).parent().find('.text-danger').text("");
					$(this).parent().find('.text-danger').text("password minimal 8 karakter");
					return apply_feedback_error(this);
				} else {
					if(len>35) {
						$(this).parent().find('.text-danger').text("");
						$(this).parent().find('.text-danger').text("password maximal 35 karakter");
						return apply_feedback_error(this);
					}
				}
			});
			//mengecek konfirmasi password
			$('#conpass').blur(function(){
				var pass = $("#pass").val();
				var conf=$(this).val();
				var len=conf.length;
				if (len>0 && pass!==conf) {
					$(this).parent().find('.text-danger').text("");
					$(this).parent().find('.text-danger').text("Konfirmasi Password tidak sama dengan password");
					return apply_feedback_error(this);
				}
			});

			//mengecek nomer hp
			$('#telp').blur(function(){
				var hp=$(this).val();
				var len=hp.length;
				if (len>0 && len<=10){
					$(this).parent().find('.text-danger').text("");
					$(this).parent().find('.text-danger').text("Nomer HP terlalu pendek");
					return apply_feedback_error(this);
				} else {
					if(!valid_hp(hp)){
						$(this).parent().find('.text-danger').text("");
						$(this).parent().find('.text-danger').text("Format nomer hp tidak sah.(ex: +6285736262623 | 081212341234)");
						return apply_feedback_error(this);
					} 
					else {
						if (len >13){
							$(this).parent().find('.text-danger').text("");
							$(this).parent().find('.text-danger').text("Nomer HP terlalu Panjang");
							return apply_feedback_error(this);
						}
					}
				}
			});

				//submit form validasi
			$('#formInput').submit(function(e){
            	e.preventDefault();            
				var valid=true;     
				$(this).find('.textbox').each(function(){
					if (! $(this).val()){
						get_error_text(this);
						valid = false;
						$('html,body').animate({scrollTop: 0},"fast");
					} 
					if ($(this).hasClass('no-valid')){
						valid = false;
						$('html,body').animate({scrollTop: 0},"fast");
					}
				});
				$(this).find('.select').each(function(){
					if ($(this).val()=='none'){
						get_error_text_select(this);
						valid = false;
						$('html,body').animate({scrollTop: 0},"fast");
					} 
					if ($(this).hasClass('no-valid')){
						valid = false;
						$('html,body').animate({scrollTop: 0},"fast");
					}
				});
				if (valid){
					Swal.fire({
						title: "Konfirmasi Simpan Data",
						text: "Data Akan di Simpan Ke Database",
						type: "success",
						icon: 'info',
						showCancelButton: true,
						confirmButtonColor: "#1da1f2",
						confirmButtonText: "Yakin",
						closeOnConfirm: false,
						showLoaderOnConfirm: true,
						}).then((result) => 
						{
						if (result.value) {
							$.ajax({
								url: "adduser.php",
								type: "POST",
								data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
								// dataType: "html",
								success: function(){                
									Swal.fire({                            
										title: 'Data berhasil Disimpan',
										html: 'Anda akan menuju halaman login',
										timer: 2000,
										timerProgressBar: true,                            
										onClose: () => {                              
										window.location.replace('login.php')
										}
									});
								},
								error: function (xhr, ajaxOptions, thrownError) {
									setTimeout(function(){
									Swal.fire("Error", "Tolong Cek Koneksi Lalu Ulangi", "error");
									}, 2000);
								}
							});
						}
					});                
				}
			});
		});

		//fungsi cek nama
		function valid_nama(nama) {
				var pola= new RegExp(/^[a-z A-Z]+$/);
				return pola.test(nama);
		}
		//fungsi cek tanggal lahir
		// function valid_tanggal(tanggal){
		// 		var pola= new RegExp(/\b\d{1,2}[\/-]\d{1,2}[\/-]\d{4}\b/);
		// 		return pola.test(tanggal);
		// }
		//fungsi cek email
		function valid_email(email){
				var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
				return pola.test(email);
		}
		//fungsi cek phone 
		function valid_hp(hp){
				var pola = new RegExp(/^[0-9-+]{12,14}$/);
				return pola.test(hp);
		}
		//menerapkan gaya validasi form bootstrap saat terjadi eror
		function apply_feedback_error(textbox){
			$(textbox).addClass('no-valid'); //menambah class no valid
			$(textbox).parent().find('.text-danger').show();
			$(textbox).closest('div').removeClass('has-success');
			$(textbox).closest('div').addClass('has-warning');
			$(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
			$(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
		}

		//untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
		function get_error_text(textbox){
			$(textbox).parent().find('.text-danger').text("");
			$(textbox).parent().find('.text-danger').text("* Text Box Ini Tidak Boleh Kosong");
			return apply_feedback_error(textbox);
		}
		
		function apply_feedback_error_select(select){
				$(select).addClass('no-valid'); //menambah class no valid
				$(select).parent().find('.text-danger').show();
				$(select).closest('div').removeClass('has-success');
				$(select).closest('div').addClass('has-warning');
				$(select).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
				$(select).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
		}
		//untuk mendapat eror teks saat select kosong, digunakan saat submit form dan blur fungsi
		function get_error_text_select(select){
			$(select).parent().find('.text-danger').text("");
			$(select).parent().find('.text-danger').text("* Harap Pilih Packages");
			return apply_feedback_error(select);
		}
		</script>
		</body>
	</html>
