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
											<li><a href="#" class="nav-link">Hak Akses Karyawan</a></li>
										</ul>
								</li>
										<li><a href="index.html"><svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
												<path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
												<path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
											</svg> Logout</a></li>
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
					<h2 style="transform: translateY(150px);font-weight: bold;color: rgb(28, 10, 112);">Ringkasan Barang</h2>
					<form class="form-inline" style="transform: translate(10px,170px);" id=formsearch>
						<div class="form-group row">
							<div class="col-10">
								<input class="form-control" type="text" value="" id="cari" placeholder="Nama Barang">
							</div>										
						</div>
						<button class="btn btn-info btn-xs" type="submit" style="color: yellow;transform: translateX(10px);"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
							</svg>
						</button>
					</form>
					<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="transform: translate(800px,125px);width:300px;">Tambah Barang +</button>
					<form id=formaddbarang method='post'>
						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">											
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									<h4 class="modal-title" style="text-align: center;">Tambah Barang</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="namabarang">Nama Barang :</label>
											<input type="text" class="form-control" id="namabarang" name="namabarang">
											<span class="text-danger" ></span>
										</div>
										<div class="form-group">
											<label for="jumlahbarang">Jumlah Barang : </label>
											<input type="number" class="form-control" id="jumlahbarang" name="jumlahbarang">
											<span class="text-danger" ></span>
										</div>
										<div class="form-group">
											<label for="ketbarang">Satuan : </label>
											<input type="text" class="form-control" id="satbarang" name="satbarang">
											<span class="text-danger" ></span>
										</div>
										<div class="form-group">
											<label for="ketbarang">Batas Bawah : </label>
											<input type="text" class="form-control" id="batasb" name="batasb">
											<span class="text-danger" ></span>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-success" name="btnAdd">Tambahkan</button>
										<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>											
							</div>
						</div>
						<!-- Modal -->
					</form>
					<form id=formeditbarang method='post'>
						<!-- Modal -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">											
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									<h4 class="modal-title" style="text-align: center;">Edit Barang</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="namabarang">Nama Barang :</label>
											<input type="text" class="form-control" id="namabarang1" name="namabarang1" readonly>
											<span class="text-danger" ></span>
										</div>
										<div class="form-group">
											<label for="jumlahbarang">Jumlah Barang : </label>
											<input type="number" class="form-control" id="jumlahbarang1" name="jumlahbarang1">
											<span class="text-danger" ></span>
										</div>
										<div class="form-group">
											<label for="ketbarang">Satuan : </label>
											<input type="text" class="form-control" id="satbarang1" name="satbarang1">
											<span class="text-danger" ></span>
										</div>
										<div class="form-group">
											<label for="ketbarang">Batas Bawah : </label>
											<input type="text" class="form-control" id="batasb1" name="batasb1">
											<span class="text-danger" ></span>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-success" name="btnAdd">Edit</button>
										<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>											
							</div>
						</div>
						<!-- Modal -->
					</form>
					
							
					<div class="isi laporan" style="border: solid 1px blue;transform: translateY(180px);height:1200px;border-radius: 10px;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Stok</th>
									<th>Satuan</th>
									<th>Keterangan</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody id=bodytabel>
									<!-- <tr>
											<td>1</td>
											<td>Kopi</td>
											<td>100</td>
											<td>50</td>
											<td>50</td>
											<td>Ada</td>
											<td>
													<button type="submit"class="btn btn-warning" name="btnedit"data-toggle="modal" data-target="#myEdit">
															<svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
																</svg>
													</button> -->
													<!-- Modal
													<div class="modal fade" id="myEdit" role="dialog" style="transform: translateY(-300px);">
															<div class="modal-dialog">-->
															
															<!-- Modal content-->
															<!-- <div class="modal-content">
																	<div class="modal-header">
																	<h4 class="modal-title" style="text-align: center;">Tambah Barang</h4>
																	</div>
																	<div class="modal-body">
																			<form>
																					<div class="form-group">
																							<label for="namabarang">Nama Barang :</label>
																							<input type="text" class="form-control" id="namabarang" name="namabarang">
																					</div>
																					<div class="form-group">
																							<label for="jumlahbarang">Jumlah Bahan Masuk:</label>
																							<input type="number" class="form-control" id="jumlahbarang" name="jumlahbarang">
																					</div>
																					<div class="form-group">
																							<label for="ketbarang">Keterangan :</label>
																							<input type="text" class="form-control" id="ketbarang" name="ketbarang">
																					</div>
																			</form>
																	</div>
																	<div class="modal-footer">
																	<button type="submit" class="btn btn-success" name="btnAdd">Tambahkan</button>
																	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
																	</div>
															</div>
															
															</div>
													</div>  -->
													<!-- <button type="submit" class="btn btn-danger" name="btndelete">
															<svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
																</svg>
													</button>
											</td>
									</tr> -->
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
				$('#formsearch').on('submit',function(e){
					e.preventDefault();
					hasilsearch($('#cari').val());
				});
				function hasilsearch(nama)
				{
					$('#bodytabel').html('');
					$.ajax({
						method:'post',
						url:'ajaxsearchbarang.php',
						data:{namasearch:nama},
						success:function(res){
							if(res=='0'){
								$('#bodytabel').append('<tr><td colspan=6 align=center><b>No data Found</b></td></tr>');
							}
							else 
							{
								data=JSON.parse(res);
								$('#bodytabel').append(data)
							}
						}
					});
				}
				loadbarang();
				function loadbarang(){
					$('#bodytabel').html('');
					$.ajax({
						method:'post',
						url:'ajaxloadbarang.php',
						success:function(res){
							if(res=='0'){
								$('#bodytabel').append('<tr><td colspan=6 align=center><b>No data Found</b></td></tr>');
							}
							else 
							{
								data=JSON.parse(res);
								$('#bodytabel').append(data)
							}
						}
					});
				}
				function addbarang()
				{					
					$.ajax({
						method:'post',
						url:'ajaxaddbarang.php',
						data: $('#formaddbarang').serialize(),
						success:function(res){
							if(res=='1'){
								Swal.fire({                            
									title: 'Berhasil Menambah Barang',
									// html: 'Anda akan menuju halaman login',
									timer: 1000,
									timerProgressBar: true,                            
									onClose: () => {    
										$('#myModal').modal('toggle');
										// $('#myModal .close').click();
										loadbarang();

									}
								});
							}							
						}
					});				
				}
				$('#formaddbarang').on('submit',function(e){
					e.preventDefault();
					var valid=true;     
					$(this).find('input').each(function(){
						if (! $(this).val()){
							get_error_text(this);
							valid = false;							
						} 
						if ($(this).hasClass('no-valid')){
							valid = false;
						}
					});
					if(valid)
					{
						if(cekbarang($('#namabarang').val()))addbarang();
						else
						{
							get_error_text_ada($('#namabarang'));
						}
					}
					
					else
					{
						Swal.fire({
							icon: 'error',
							title: 'Error',
							text: 'Data Tidak Lengkap!',
						})
					}
					
				});								
				$('.text-danger').hide();
				//untuk mengecek bahwa semua textbox tidak boleh kosong
				$('#formaddbarang input').each(function(){ 
					$(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
						if($(this).attr('id')!='#namabarang'){
							if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
							return get_error_text(this); //function get_error_text ada di bawah
							} else {
								$(this).removeClass('no-valid'); 
								$(this).parent().find('.text-danger').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
								$(this).closest('div').removeClass('has-warning');
								$(this).closest('div').addClass('has-success');							
							}
						}						
					});
				});			
				function cekbarang(nama)
				{  
					status;
					$.ajax({
						method:'post',
						url:'ajaxcekbarang.php',
						data:{namabarang : nama},
						success:function (res){
							if(res=='tidak ada')status='true';					
							else status='false'
							// alert(status);
						}
					});
					return status;
				}
				function apply_feedback_error(textbox){
					$(textbox).addClass('no-valid'); //menambah class no valid
					$(textbox).parent().find('.text-danger').show();
					$(textbox).closest('div').removeClass('has-success');
					$(textbox).closest('div').addClass('has-warning');					
				}

				//untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
				function get_error_text(textbox){
					$(textbox).parent().find('.text-danger').text("");
					$(textbox).parent().find('.text-danger').text("* Field Ini Tidak Boleh Kosong");
					return apply_feedback_error(textbox);
				}
				function get_error_text_ada(textbox){
					$(textbox).parent().find('.text-danger').text("");
					$(textbox).parent().find('.text-danger').text("* Barang Sudah Ada");
					return apply_feedback_error(textbox);
				}				
				function deletebarang(nama)
				{					
					$.ajax({
						method:'post',
						url:'ajaxdeletebarang.php',
						data :{namabarang : nama},
						success : function(res)
						{
							loadbarang();
						}
                	});
				}							
				function editbarang()
				{
					<?php
						$namabarang=$_COOKIE['namabarang'];
						$username=$_SESSION['login']['username'];
						$sql="SELECT * from barang where username='$username' and nama_barang='$namabarang'";
						$res=mysqli_query($conn,$sql);
						while ($row=mysqli_fetch_assoc($res)) {
							echo "
								$('#namabarang1').val('".$row['nama_barang']."');
								$('#jumlahbarang1').val('".$row['stok']."');
								$('#satbarang1').val('".$row['satuan']."');
								$('#batasb1').val('".$row['batas_bawah']."');
								$('#myModal1').modal('toggle');
							";
						}
					?>										
				}
				function edited()
				{				
					$.ajax({
						method:'post',
						url:'ajaxeditbarang.php',
						data: $('#formeditbarang').serialize(),
						success:function(res){
							Swal.fire({                            
								title: 'Berhasil Edit Barang',
								// html: 'Anda akan menuju halaman login',
								timer: 1500,
								timerProgressBar: true,                            
								onClose: () => {    
									$('#myModal1').modal('toggle');
									// $('#myModal .close').click();
									loadbarang();
								}
							});							
						}
					});								
				}
				$('#formeditbarang').on('submit',function(e){
					e.preventDefault();
					var valid=true;     
					$(this).find('input').each(function(){
						if (! $(this).val()){
							get_error_text(this);
							valid = false;							
						} 
						if ($(this).hasClass('no-valid')){
							valid = false;
						}
					});
					if(valid)
					{
						edited();						
					}					
					else
					{
						Swal.fire({
							icon: 'error',
							title: 'Error',
							text: 'Data Tidak Lengkap!',
						})
					}
					
				});	
				<?php				
				$username=$_SESSION['login']['username'];
				$select="SELECT * from barang where username='$username'";
				$res=mysqli_query($conn,$select);
				while($row=mysqli_fetch_assoc($res))
				{
					echo "$('body').on('click','#edit".$row['nama_barang']."',function(){						
						document.cookie='namabarang=".$row['nama_barang']."'
						editbarang();
					});";
					echo "$('body').on('click','#del".$row['nama_barang']."',function(){
						deletebarang('".$row['nama_barang']."');
					});";  
				}
				?>
			});		
		</script>			
		</body>
	</html>
