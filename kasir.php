<?php
  require 'conn.php';
  session_start();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Kasir</title>
</head>
<body>
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
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background-color:rgb(153, 110, 81);">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo">
              <a href="#" class="h2 mb-0">
                <img src="logo(trans).png" alt="logo" style="width: 80px;height: 90px;transform: translate(900px,20px);">
            </a>
          </h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-left" role="navigation"style="transform:translateX(-320px);">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="kasir.php" class="nav-link">Kasir</a></li>
                <li style="transform: translateX(1000px);"><button class='btn btn-danger' id='btnlogout'>
                  <svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z" clip-rule="evenodd"/>
                  </svg> Logout</button>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>

    <!--ISInya-->
    <div class="daftarmenu">
        <div class="kotakkecil" style="background-color: rgb(189, 217, 250);width:800px;height: 800px;float: left;">
        <form id="tambahBarang">
          <div class="modal fade" id="modalTambah" role="dialog">
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
										<input type="text" class="form-control" id="namabarang1" name="namabarang1" readonly>
										<span class="text-danger" ></span>
									</div>
									<div class="form-group">
										<label for="ketbarang">Jumlah Pesan : </label>
										<input type="number" class="form-control" id="jumlahBarang" name="jumlahBarang">
										<span class="text-danger" ></span>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success" name="btnAdd">Tambah</button>
									<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>											
						</div>
          </div>
          </form>
          <form id="listMenu" style="display: flex; flex-wrap: wrap; flex-direction: row;">
          </form>    
        </div>
        <div class="details" style="background-color: cornsilk;width:462px;height: 700px;float: left;transform: translateY(92px);">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody id="tableNota">
                    
                </tbody>
            </table>
            <button type="submit" class="btn btn-danger"style="margin-left:50px;">Cancel</button>
            <button type="button" id="btnBayar" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"style="margin-left:50px;">Pay Rp.xx.xxx</button>
        </div>
    </div>
    <!--MODAL-->
    <!-- Modal -->
  <!-- <form id="bayar"> -->
  <form id="bayar">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"style="font-weight:bold;">Details</h4>
        </div>
        <div class="modal-body"style="height:350px;">
          <h5 id="totalBayar">Rp.xx.xxx</h5>
          
          <input type="number" id="inputuang" name="inputuang"class="form-control"><br>
          <!-- <div style="transform: translateY(30px);"></div><br>
          <button type="button" name="btn1rb" id="btn1rb" class="btn btn-info" style="transform: translateY(10px);margin-left: 10px;">Rp.1.000</button>
          <button type="button" name="btn2rb" id="btn2rb" class="btn btn-info" style="transform: translateY(10px);">Rp.2.000</button>
          <button type="button" name="btn5rb" id="btn5rb" class="btn btn-info" style="transform: translateY(10px);">Rp.5.000</button>
          <br>
          <button type="button" name="btn10rb" id="btn10rb" class="btn btn-info" style="transform: translateY(20px);">Rp.10.000</button>
          <button type="button" name="btn20rb" id="btn20rb" class="btn btn-info" style="transform: translateY(20px);">Rp.20.000</button>
          <button type="button" name="btn50rb" id="btn50rb" class="btn btn-info" style="transform: translateY(20px);">Rp.50.000</button>
          <br>
          <button type="button" name="btn100rb" id="btn100rb" class="btn btn-info" style="transform: translateY(30px);">Rp.100.000</button>
          <br>
          <h5 id="kembalian" style="text-align:right;transform: translateY(35px);">Kembalian : Rp.xx.xxx</h5> -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button name="print" type="submit" class="btn btn-success">Print</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  <!-- </form> -->
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
      <script>
        $(document).ready(function() {
          loadMenu();
          loadNota();
          <?php			
          $username=$_SESSION['loginKaryawan']['username'];
          $select="SELECT * from barang where username='$username'";
          $res=mysqli_query($conn,$select);
          while($row=mysqli_fetch_assoc($res))
          {
            echo "$('body').on('click','#cart".$row['nama_barang']."',function(e){
              e.preventDefault();
              cartBarang('".$row['nama_barang']."');
            });";
            echo "$('body').on('click','#del".$row['nama_barang']."',function(){
              deletenota('".$row['nama_barang']."');
            });";  
          }
          ?>
        })
        function deletenota(nama)
				{	
					Swal.fire({
						title: "Konfirmasi Hapus Barang",
						text: "Apakah anda yakin ingin menghapus barang",
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
							Swal.fire({                            
								title: 'Berhasil Hapus Barang',
								// html: 'Anda akan menuju halaman login',
								timer: 1000,
								timerProgressBar: true,                            
								onClose: () => {    									
									$.ajax({
										method:'post',
										url:'ajaxdeletenota.php',
										data :{namabarang : nama},
										success : function(res)
										{
											loadNota();
										}
									});
								}
							});											
						}
					}); 			
					
				}
        function cartBarang(namab)
				{			
					$.ajax({
						method:'post',
						url:'ajaxcartmenu.php',
						data: {namabarang : namab},
						success:function(res){
							console.log(res);
							var data=JSON.parse(res);
							console.log(data);
							$('#namabarang1').val(data[0]);											
						}
					});
					$('#modalTambah').modal();										
				}
        $('#bayar').on('submit',function(e){
          e.preventDefault();
          $.ajax({            
            url:'ajaxcekcart.php',
            success : function(res) {
              if(res=='0'){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Cart masih Kosong!'
                })
              }
              else if(res=='1')
              {
                $.ajax({
                  method:'post',
                  url:'ajaxhitungkembalian.php',
                  data: $('#bayar').serialize(),
                  success:function(res){
                    if (res == 0) {
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Uang yang diberikan kurang!',
                      });
                    }else{
                      $.ajax({
                        url:'ajaxaddnota.php'
                      });
                      var data = JSON.parse(res);
                      $.ajax({
                        method:'post',
                        url:'ajaxupdatebarang.php',
                        success:function(res){
                          Swal.fire({
                          icon: 'success',
                          title: 'Berhasil',
                          text: 'Pembayaran berhasil!',
                          text: 'Kembalian Rp.' + data[1]
                          })
                          $('#myModal').modal('toggle');
                          $('#inputuang').val('0');
                          loadNota();
                          $('#btnBayar').html('Pay '+ 'Rp.-');
                          $('#totalBayar').html('Rp.-');
                        }

                      })
                    }
                  }
                })
              }
            }
				  }); 					
				});
        $('#tambahBarang').on('submit',function(e){
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
						detail();				
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
        function detail(){
          $.ajax({
						method:'post',
						url:'cekstokmenu.php',
						data: $('#tambahBarang').serialize(),
						success:function(res){
              if (res == 0) {
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Stok tidak mencukupi!',
						    })
              }else{
                $.ajax({
                  method:'post',
                  url:'ajaxtulisNota.php',
                  data: $('#tambahBarang').serialize(),
                  success:function(res){
                    loadNota();
                    $('#modalTambah').modal('toggle');
                  }
                })	
              }	
						}
					});
        }
        function loadNota(){
          $.ajax({
						method:'post',
						url:'ajaxloadnota.php',
						success:function(res){
              if(res!='0'){
                $('#tableNota').html('');
                data=JSON.parse(res);
                $('#tableNota').append(data[0]);
                $('#btnBayar').html('Pay '+ 'Rp.'+data[1]);
                $('#totalBayar').html('Rp.'+data[1]);
              }                            
            }
          })
          
        }
        function loadMenu(){
					$('#listMenu').html('');
					$.ajax({
						method:'post',
						url:'ajaxloadKasir.php',
						success:function(res){
							data=JSON.parse(res);
							$('#listMenu').append(data);
						}
					});
				}
        $('body').on('click','#btn1rb',function(){
					uang(1000);
        });
        $('body').on('click','#btn2rb',function(){
					uang(2000);
        });
        $('body').on('click','#btn5rb',function(){
					uang(5000);
        });
        $('body').on('click','#btn10rb',function(){
					uang(10000);
        });
        $('body').on('click','#btn20rb',function(){
					uang(20000);
        });
        $('body').on('click','#btn50rb',function(){
					uang(50000);
        });
        $('body').on('click','#btn100rb',function(){
					uang(100000);
        });
        
        function uang(res) {
          $('#inputuang').val($("#inputuang").val() + res);
        }
        $('.text-danger').hide();
				//untuk mengecek bahwa semua textbox tidak boleh kosong
				$('#tambahBarang input').each(function(){ 
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
        $('#btnlogout').click(function (){
          $.ajax({
            url:'ajaxdeletesessionk.php',
            success:function(res)
            {
              window.location.replace('logink.php');
            }
          });
         
        });        
      </script>    
</body>
</html>