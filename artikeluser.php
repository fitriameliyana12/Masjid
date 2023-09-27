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
				<div id="content" class="8u skel-cell-important">
					<section>
						<header>
							<center>
								<h2>ARTIKEL</h2>
							</center>
						</header><br>

						<?php
						include "config.php";
						// $query = mysqli_query($koneksi, "SELECT * FROM artikel");
						// while ($row=mysqli_fetch_array($query));
						// 	if(strlen($row["isi"]) <=200 ) {
						// 		echo $row["isi"];
						// 	} else {
						// 		$y=substr($row["isi"],0,200) . '<br><br><a href=artikelreadmore.php?id_artikel='.$row["id_artikel"].'>ReadMore</a>';
						// 		echo $y;
						// 	}	

						$dataPerPage = 5;
						// if (isset($_GET['page'])) {
						// 	$noPage = $_GET['page'];
						// } else {
						// 	$noPage = 1;
						// }
						$page = isset($_GET['dataPerPage']) ? (int) $_GET["dataPerPage"] : 1;
						$start = ($page > 1) ? ($page * $dataPerPage) - $dataPerPage : 0;

						// $offset = ($noPage - 1) * $dataPerPage;
						$result = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id_artikel DESC");
						$total = mysqli_num_rows($result);
						$pages = ceil($total / $dataPerPage);
						$no = $start + 1;
						$sql = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT $start, $dataPerPage");
						if (mysqli_num_rows($sql) == 0) {
							echo 'Blank...!';
						} else {
							while ($data = mysqli_fetch_assoc($sql)) {
								echo '<div class="dc-profile">';
								echo '<h2 class="style">' . $data['judul'] . '</h2>';
								echo '<p class="para">' . substr($data['isi'], 0, 350) . ' [...]</p>';
								echo '<div class="dc-profile">';
								echo $data['penulis'] . ' | ' . $data['tanggal'];
								echo '<div class="button1">';
								echo '<a class="btn btn_s" href="artikelreadmore.php?id=' . $data['id_artikel'] . '">Readmore &raquo;</a>';
								echo '<br><br>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
							} ?>

							<div>
								<?php for ($i = 1; $i <= $pages; $i++) { ?>
									<a href="?dataPerPage=<?php echo $i; ?>"><?php echo $i; ?></a>
								<?php } ?>
							</div>
						<?php
							// $query = "SELECT COUNT(id_artikel) AS jumData FROM masjid";
							// $hasil = mysqli_query($koneksi, $query);
							// $row = mysqli_fetch_array($hasil);

							// $jumData = $row['jumData'];

							// $jumPage = ceil($jumData / $dataPerPage);

							// echo '<div class="dc-profile" align="center">';
							// if ($noPage > 1) echo  "<a href='" . $_SERVER['PHP_SELF'] . "?page=" . ($noPage - 1) . "'>&laquo; Prev</a>";

							// for ($page = 1; $page <= $jumPage; $page++) {
							// 	if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) {
							// 		if (($showPage == 1) && ($page != 2))  echo "...";
							// 		if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
							// 		if ($page == $noPage) echo " <b>" . $page . "</b> ";
							// 		else echo " <a href='" . $_SERVER['PHP_SELF'] . "?page=" . $page . "'>" . $page . "</a> ";
							// 		$showPage = $page;
							// 	}
							// }

							// if ($noPage < $jumPage) echo "<a href='" . $_SERVER['PHP_SELF'] . "?page=" . ($noPage + 1) . "'>Next &raquo;</a>";
						}
						?>

					</section>
				</div>

				<!-- Sidebar -->
				<div id="sidebar" class="4u">
					<section>
						<header>
							<h2>Berita Terbaru</h2>
							<!-- <span class="byline">Praesent lacus congue rutrum</span> -->
						</header>
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

	<!-- Footer -->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="3u">
					<section>
						<ul class="style1">
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