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
				
					<!-- Stats Table    -->
						<div id="Stats Table" class="8u skel-cell-important">
							<section>
								<header>
                                    <h2 class="style" align="center">Jadwal Kegiatan</h2>
                                    </header>
                                    <body><br><br>
                                    <?php
include "config.php";
$query = mysqli_query($koneksi,"SELECT * FROM jadwal ORDER BY id_jadwal DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="10" cellspacing="10" width="850">
        <thead>
        <tr>
            <td><b>No. </b></td>
            <td><b>Nama Kegiatan</b></td>
            <td><b>Tanggal Kegiatan</b></td>
            <td><b>Keterangan</b></td>
        </tr>
        </thead>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["tgl_kegiatan"];?></td>
            <td><?php echo $data["keterangan"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
										</body>
							</section>
						</div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									<h2>Berita Terbaru</h2>
									<!-- <span class="byline">Praesent lacus congue rutrum</span> -->
								</header>
								<!-- <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Maecenas luctus lectus at sapien. Consectetuer adipiscing elit.</p> -->
								<ul class="default">
									<li><a href="artikelpuasa.html">Qadha' Puasa dan Fidyah</a></li>
									<li><a href="artikelwakaf.html">Program Wakaf Tunai Pembelian Rumah Sebagai Kampus Madrasah Al-Quran Sabilillah</a></li>
									<li><a href="artikelbedah.html">Bedah Rumah Sabilillah</a></li>
									<li><a href="artikelaqiqah.html">Aqiqah Sabilillah</a></li>
								</ul>
							</section>
						</div>
					<!-- Sidebar -->
						
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

	<!-- Copyright
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div> -->

	</body>
</html>