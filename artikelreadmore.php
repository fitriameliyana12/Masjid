<?php include("config.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Masjid Sabilillah Malang</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Masjid Sabilillah Malang</a></h1>
					<!-- <span>Design by TEMPLATED</span> -->
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="artikeluser.php">Artikel</a></li>
						<li><a href="twocolumn1.html">Galeri</a></li>
						<li><a href="twocolumn2.php">Jadwal Kegiatan</a></li>
						<li><a href="onecolumn.php">Kontak Kami</a></li>
						<li><a href="login.html">Login</a></li>
					</ul>
				</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
						<div id="content" class="12u skel-cell-important">
							<section>
								<header>
									<center><h2>ARTIKEL</h2></center><br>
                                </header>
                                <?php
								include 'config.php';
								//$id_artikel = abs(intval($_GET['id_artikel']));
								$id_artikel = $_GET['id'];
								//echo $id_artikel;
								$query=mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$id_artikel'" );
								while ($data=mysqli_fetch_array($query)) { ?>
								<center><h1><b><?php echo $data['judul']; ?></b></h1></center>
								<br><br>
								<h1><?php echo $data['isi']; ?></h1>
									<?php
								}
								// $id_artikel = $_GET["id_artikel"];
								// $query = mysqli_query($koneksi, "SELECT*FROM artikel WHERE id_artikel = '$id_artikel'");
								// while ($row=mysqli_fetch_array($query)) {
								// 	echo $row["isi"];
								// }
								// if($query == FALSE) {
								// 	die(mysql_error());
								
								
								
							   
									// session_start();
									// ob_start();
									// include 'config.php';

									// echo '<div class="main_bg">';
									// echo '<div class="wrap">';
									// echo '<div class="wrapper">';
									// echo '<div class="main">';
									// $id_artikel = abs((int)$_GET['id_artikel']);
									// $sql = mysqli_query($koneksi, "SELECT*FROM artikel WHERE id_artikel='$id_artikel'") or die(mysql_error());
									// // var_dump($sql);

									// if(mysqli_num_rows($sql) == 0){
									// 	// echo 'Blank...!';
									// 	$data = mysqli_fetch_assoc($sql);
									// 	$cat_id = $data['blog_cat_id'];
										
									// 	echo '<div id ="blog">';
									// 	//menampilkan data artikel
									// 	echo '<div class="details">';
									// 	echo '<h2 class="style" align="center">'.$data['judul'].'</h2>';
									// 	echo '</div>';
									// 	echo '<br><br>';
									// 	echo '<div class="det-para">'.$data['isi'].'</div>';
									// 	echo '<p class="top-para">';
									// 	echo '<br>';
									// 	echo $data['penulis'].' | '.$data['tanggal'];
									// 	echo '<br><br>';
									// 	echo '</div>';
									// }else{
									// 	// $data = mysqli_fetch_assoc($sql);
									// 	// $cat_id = $data['blog_cat_id'];
										
									// 	// echo '<div id ="blog">';
									// 	// //menampilkan data artikel
									// 	// echo '<div class="details">';
									// 	// echo '<h2 class="style" align="center">'.$data['judul'].'</h2>';
									// 	// echo '</div>';
									// 	// echo '<br><br>';
									// 	// echo '<div class="det-para">'.$data['isi'].'</div>';
									// 	// echo '<p class="top-para">';
									// 	// echo '<br>';
									// 	// echo $data['penulis'].' | '.$data['tanggal'];
									// 	// echo '<br><br>';
									// 	// echo '</div>';
									// }
								?> 

							</section>
						</div>
					<!-- /Content -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<header>
								<h2>Alamat Kami</h2>
							</header>
							<p>Lazis Sabilillah<br>
								Lembaga amil zakat infaq & shodaqoh<br>
								Jl. A. Yani no 15 Blimbing <br>
								089 8000 8078<br>
								lazissabilillah@gmail.com</p>
						</ul>
					</section>
				</div>
				<div class="3u">
					<section>
						<ul class="style1">
							<header>
								<h2>Informasi</h2>
							</header>
							<li><a href="artikeluser.php">Artikel</a></li>
							<li><a href="twocolumn1.html">Galeri</a></li>
							<li><a href="twocolumn2.php">Jadwal Kegiatan</a></li>
							<li><a href="onecolumn.php">Kontak Kami</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</section>				
				</div>
				<div class="6u">
					<section>
						<header>
							<h2>Berita Terbaru</h2>
						</header>
						<ul class="default">
							<li><a href="artikelpuasa.html">Qadha' Puasa dan Fidyah</a></li>
							<li><a href="artikelwakaf.html">Program Wakaf Tunai Pembelian Rumah Sebagai Kampus Madrasah Al-Quran Sabilillah</a></li>
							<li><a href="artikelbedah.html">Bedah Rumah Sabilillah</a></li>
							<li><a href="artikelaqiqah.html">Aqiqah Sabilillah</a></li>
						</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>