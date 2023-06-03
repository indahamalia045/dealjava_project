<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deal Java</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-2">
						<div id="fh5co-logo"><a href="index.php"><img src="images/deall.png"> eal Java</a></div>
					</div>
				</div>
			</div>
		</nav>                                                   
		<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 text-center">
          <div class="feature-center animate-box" data-category="1">
            <span class="icon">
              <i class="icon-wallet"></i>
            </span>
            <h3>Food</h3>
            <p>Menyediakan promo terkait dengan makanan yang ada di sekitar Medan</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center">
          <div class="feature-center animate-box" data-category="2">
            <span class="icon">
              <i class="icon-heart"></i>
            </span>
            <h3>Beauty</h3>
            <p>Menyediakan promo terkait dengan kecantikan yang ada di sekitar Medan</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center">
          <div class="feature-center animate-box" data-category="3">
            <span class="icon icon">
              <i class="icon-shopping-cart"></i>
            </span>
            <h3>Life Style</h3>
            <p>Menyediakan promo terkait dengan lifestyle yang ada di sekitar Medan</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="fh5co-product">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
          <h2>Products</h2>
          <p>Produk Dealjava</p>
        </div>
      </div>
      <div class="row">
        <?php
          require('koneksi.php');
          if (isset($_GET['category'])) {
            $category = $_GET['category'];
            $sql = "SELECT * FROM produk WHERE id_kategori = $category";
          } else {
            $sql = "SELECT * FROM produk";
          }
          $query = mysqli_query($db_con, $sql);
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col-md-4 text-center animate-box" data-category="<?php echo $data["id_kategori"]; ?>">
          <div class="product">
            <div class="product-grid" style="background-image:url(images/<?php echo $data["gambar"]; ?>);">
              <div class="inner">
                <p>
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=6285277795902&text=Apakah%20Produk%20Ini%20Masih%20Ada?" class="icon"><i class="icon-eye"></i> Beli Sekarang </a>
                </p>
              </div>
            </div>
            <div class="desc">
              <h3><a href="index.php"><?php echo $data["nama_produk"]; ?></a></h3>
              <span class="price">Rp<?php echo $data["harga"]; ?>,00</span>
            </div>
          </div>
        </div>
        <?php } ?>  
      </div>
    </div>
  </div>


		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>

		<script>
			$(document).ready(function() {
				$('.feature-center').on('click', function() {
					var category = $(this).data('category');
					window.location.href = 'index.php?category=' + category;
				});
			});
		</script>
	</body>
	<footer id="fh5co-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
					<a href="kebijakan_privasi.php">Kebijakan Privasi</a> |
					<a href="terms_of_use.php">Terms of Use</a> |
					<a href="terms_of_services.php">Terms of Services</a> |
					<a href="customer_service.php">Customer Service</a>
				</p>
				<p>Contact: 0852-7779-5902 | 0800-0800-8000 | cs@dealjava.com</p>
				<p>Jam Operasional: 09.00 WIB - 18.00 WIB</p>
				<p>Our Location: Surabaya | Jakarta | Medan</p>
				<p>
					Download Our Apps:
					<a href="https://play.google.com/store/apps/details?id=com.dealjava.app" target="_blank">play store</a> |
					<a href="https://www.apple.com/app-store/" target="_blank">app store</a>
				</p>
				<p>
					Designed & coded with 💚 by Kelompok 10
				</p>
				<p>
					© 2019 Dealjava. All rights reserved.
				</p>
			</div>
		</div>
	</div>
</footer>
</html>
