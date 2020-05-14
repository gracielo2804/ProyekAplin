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
                <img src="logo(trans).png" alt="logo" style="width: 80px;height: 90px;transform: translate(1000px,20px);">
            </a>
          </h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-left" role="navigation"style="transform:translateX(-300px);">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="kasir.php" class="nav-link">All</a></li>
                <li><a href="kat1.html" class="nav-link">Kategori1</a></li>
                <li><a href="kat2.html" class="nav-link">Kategori2</a></li>
                <li><a href="kat3.html" class="nav-link">Kategori3</a></li>
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
            <div class="anak" style="background-color: white;width:150px;height: 150px;transform: translate(20px,100px);float: left;">
                <p>gambar</p>
                <hr>
                Nama barang
            </div>
            <div class="anak" style="background-color: white;width:150px;height: 150px;transform: translate(50px,100px);float: left;">
                <p>gambar</p>
                <hr>
                Nama barang
            </div>
        </div>
        <div class="details" style="background-color: cornsilk;width:462px;height: 700px;float: left;transform: translateY(92px);">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nasi Goreng</td>
                        <td>1</td>
                        <td>Rp.15.000</td>
                    </tr>
                    <tr>
                        <td>Nasi Goreng</td>
                        <td>1</td>
                        <td>Rp.15.000</td>
                    </tr>
                    <tr>
                        <td>Nasi Goreng</td>
                        <td>1</td>
                        <td>Rp.15.000</td>
                    </tr>
                    <tr>
                        <td>Nasi Goreng</td>
                        <td>1</td>
                        <td>Rp.15.000</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-danger"style="margin-left:50px;">Cancel</button>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"style="margin-left:50px;">Pay Rp.xx.xxx</button>
        </div>
    </div>
    <!--MODAL-->
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"style="font-weight:bold;">Details</h4>
        </div>
        <div class="modal-body"style="height:350px;">
          
                <h5>Rp.xx.xxx</h5>
                <input name="inputuang"class="form-control"><br>
                <div style="transform: translateY(30px);"></div><br>
                <button type="submit" name="btn1rb" class="btn btn-info" style="transform: translateY(10px);margin-left: 10px;">Rp.1.000</button>
                <button type="submit" name="btn2rb" class="btn btn-info" style="transform: translateY(10px);">Rp.2.000</button>
                <button type="submit" name="btn5rb" class="btn btn-info" style="transform: translateY(10px);">Rp.5.000</button>
                <br>
                <button type="submit" name="btn10rb" class="btn btn-info" style="transform: translateY(20px);">Rp.10.000</button>
                <button type="submit" name="btn20rb" class="btn btn-info" style="transform: translateY(20px);">Rp.20.000</button>
                <button type="submit" name="btn50rb" class="btn btn-info" style="transform: translateY(20px);">Rp.50.000</button>
                <br>
                <button type="submit" name="btn50rb" class="btn btn-info" style="transform: translateY(30px);">Rp.100.000</button>
                <br>
                <h5 style="text-align:right;transform: translateY(35px);">Kembalian : Rp.xx.xxx</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Print</button>
        </div>
     
      
    </div>
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