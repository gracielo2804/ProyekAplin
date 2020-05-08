<?php
require 'conn.php';
session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<title>CookiePOS-Backend</title>
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
		<script src="js/jQuery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	</head>
		
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
								<li><a href="backend(silver).html" class="nav-link">Laporan</a></li>
								<li class="has-children">
									<a href="#" class="nav-link">Inventory</a>
									<ul class="dropdown">
										<li><a href="ringkasan(silver).php" class="nav-link">Ringkasan</a></li>
										<li><a href="suppliers(silver).php" class="nav-link">Suppliers</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#" class="nav-link">Karyawan</a>
									<ul class="dropdown">
										<li><a href="listkaryawan.php" class="nav-link">List Karyawan</a></li>
										<li><a href="hakkaryawan.html" class="nav-link">Hak Akses Karyawan</a></li>
									</ul>
								</li>
								<li><a href="#"><svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
									<path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
									<path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
									</svg> Logout</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
						<a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
					</div>
				</div>
			</div>			
		</header>

	
		<div class="site-blocks-cover"id="home-section">

			<div class="container">
				<div>
					<h2 style="transform: translateY(150px);font-weight: bold;color: rgb(28, 10, 112);">Daftar Karyawan</h2>
					<form class="form-inline" style="transform: translate(10px,170px);">
							<div class="form-group row">
								<div class="col-10">
									<input class="form-control" type="text" value="" id="cari"placeholder="Nama Karyawan">
								</div>									
							</div>
							<button class="btn btn-info btn-xs" type="submit" style="color: yellow;transform: translateX(10px);"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
								</svg>
							</button>
					</form>
					<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="transform: translate(800px,125px);width:300px;">Tambah Karyawan +</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog modal-lg">								
							<!-- Modal content-->
							<form id=formInput method=post>
								<div class="modal-content">
									<div class="modal-header">
									<h4 class="modal-title" style="text-align: center;">Tambah Karyawan</h4>
									</div>
									<div class="modal-body">
										
											<div class="form-group has-feedback">
												<label for="name">Nama Karyawan :</label><br>
												<input type="text" class="form-control" id="fullname" name="fullname">
												<i class="form-control-feedback"></i>
												<span class="text-danger" ></span>
											</div>
											<div class="form-group has-feedback">
													<label for="username">Username :</label>
													<input type="text" class="form-control textbox" id="user" name=user >
													<i class="form-control-feedback"></i>
													<span class="text-danger" ></span>
											</div>
											<div class="form-group has-feedback">
													<label for="pass">Password :</label>
													<input type="password" class="form-control textbox" id="pass" name=pass  >
													<i class="form-control-feedback"></i>
													<span class="text-danger" ></span>
											</div>
											<div class="form-group has-feedback">
												<label for="conpass">Confirm Password :</label>
												<input type="password" class="form-control textbox" id="conpass" name=conpass >
												<i class="form-control-feedback"></i>
												<span class="text-danger" ></span>
											</div>
											<div class="form-group form-group has-feedback">
												<label for="alamat">Alamat : </label>
												<input type="text" class="form-control" id="alamat" name="alamat">
												<i class="form-control-feedback"></i>
												<span class="text-danger" ></span>
											</div>
											<div class="form-group form-group has-feedback">
												<label for="telp">No Telp :</label>
												<input type="number" class="form-control" id="telp" name="telp">
												<i class="form-control-feedback"></i>
												<span class="text-danger"></span>
											</div>
										
									</div>																			
									<div class="modal-footer">
											<button type="submit" class="btn btn-success" name="btnAdd">Tambahkan</button>
											<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>
							</form>
						</div>								
					</div>
				</div>
					<div class="isi laporan" style="border: solid 1px blue;transform: translateY(180px);height:1200px;border-radius: 10px;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Karyawan</th>
									<th>Username</th>
									<th>Alamat</th>
									<th>No. Telp</th>
									<th>Tanggal Daftar</th>
									<th>Status</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody id=bodytabel>											
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		

		</div>  
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
		<script>
		$(document).ready(function(){
	  		loadkaryawan();
			function loadkaryawan(){
				$('#bodytabel').html('');
				$.ajax({
					method:'post',
					url:'ajaxloadkaryawan.php',
					success:function(res){
						if(res=='0'){
							$('#bodytabel').append('<tr><td colspan=8 align=center><b>No data Found</b></td></tr>');
						}
						else 
						{
							data=JSON.parse(res);
							$('#bodytabel').append(data)
						}
					}
				});
			}
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
						url: "ajaxcekkaryawan.php",
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
								url: "ajaxaddkaryawan.php",
								type: "POST",
								data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
								// dataType: "html",
								success: function(res){
									if(res=='1'){
										Swal.fire({                            
											title: 'Data berhasil Disimpan',
											html: 'Anda akan menuju halaman login',
											timer: 2000,
											timerProgressBar: true,                            
											onClose: () => {               
												location.reload();               
												// window.location.replace('login.php')
											}
										});
									}   
									else console.log(res);									
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
			// function valid_email(email){
			// 		var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
			// 		return pola.test(email);
			// }
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
			function matikankaryawan(usernamek)
			{					
				$.ajax({
					method:'post',
					url:'ajaxnonaktifkaryawan.php',
					data :{username : usernamek},
					success : function(res)
					{
						loadkaryawan();
					}
				});
			}		
			<?php				
				$username=$_SESSION['login']['username'];
				$select="SELECT * from karyawan where username='$username'";
				$res=mysqli_query($conn,$select);
				while($row=mysqli_fetch_assoc($res))
				{
					echo "$('body').on('click','#edit".$row['username_karyawan']."',function(){						
						document.cookie='username=".$row['username_karyawan']."'
						editkaryawan();
					});";
					echo "$('body').on('click','#del".$row['username_karyawan']."',function(){
						matikankaryawan('".$row['username_karyawan']."');
					});";  
				}
			?>
		});

		//fungsi cek nama
		
		</script>

		
		</body>
	</html>
