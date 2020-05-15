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

		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/bootstrap.css">
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
								<li><a href="laporan.php" class="nav-link">Laporan</a></li>
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
								<li>
									<a href="index.html"><svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
										<path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
										<path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
									</svg> Logout</a>
								</li>
							</ul>
						</nav>
					</div>
				<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

				</div>
			</div>			
		</header>

	
		<div class="site-blocks-cover"id="home-section">

			<div class="container">
				<div>
					<h2 style="transform: translateY(150px);font-weight: bold;color: rgb(28, 10, 112);">Ringkasan Laporan Penjualan</h2>
					<form class="form-inline" id='formsearch' style="transform: translate(10px,170px);">							
						<div class="form-group row">
							<div class="col-10">
								<input class="form-control" type="text" value="" id="cari"placeholder="Receipt Number">
							</div>								
						</div>
						<button class="btn btn-info btn-xs" type="submit" style="color: yellow;transform: translateX(10px);"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
							</svg>
						</button>
					</form>
					<div class="isi laporan" style="border: solid 1px blue;transform: translateY(200px);height:1200px;border-radius: 10px;text-align:center" >
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Receipt Number</th>
									<th>Date</th>
									<th>Total</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody id=bodytabel>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal fade" id="modaldetail" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Order Details</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body" id=dnota>
							</div>
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

		<script type="text/javascript">
		$(document).ready(function() {
			loadnota();
			function loadnota(){
				$('#bodytabel').html('');
				$.ajax({
					method:'post',
					url:'ajaxloadnotalaporan.php',
					success:function(res){
						if(res=='0'){
							$('#bodytabel').append('<tr><td colspan=5 align=center><b>No data Found</b></td></tr>');
						}
						else 
						{
							data=JSON.parse(res);
							$('#bodytabel').append(data)
						}
					}
				});
			}
			function detail(idnot)
			{
				$('#modaldetail').modal('toggle');
				$('#dnota').html('');
                $.ajax({                    
                    method : 'post',
                    url : 'ajaxshowdnota.php',
                    data : {idnota:idnot},
                    success : function(res) { 
                        $('#dnota').append(JSON.parse(res));
                    }
                });
			}
			$('#formsearch').on('submit',function(e){
				e.preventDefault();
				hasilsearch($('#cari').val());
			});
			function hasilsearch(nama)
			{
				$('#bodytabel').html('');
				$.ajax({
					method:'post',
					url:'ajaxsearchnota.php',
					data:{namasearch:nama},
					success:function(res){
						if(res=='0'){
							$('#bodytabel').append('<tr><td colspan=5 align=center><b>No data Found</b></td></tr>');
						}
						else 
						{
							data=JSON.parse(res);
							$('#bodytabel').append(data)
						}
					}
				});
			}
			<?php
				$username=$_SESSION['login']['username'];
				$select="SELECT * from h_nota where username='$username'";
				$res=mysqli_query($conn,$select);
				while($row=mysqli_fetch_assoc($res))
				{					
					echo "$('body').on('click','#".$row['id_nota']."',function(){
						detail('".$row['id_nota']."');
					});";  
				}
			?>
		});
		</script>
		</body>
	</html>
