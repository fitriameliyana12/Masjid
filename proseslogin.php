<?php
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT*FROM admin WHERE username='$username'
and password='$password'";
$koneksi = mysqli_connect("localhost", "root", "", "masjid")or die("Gagal Koneksi ke Database!!");
$result = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($result);

if (empty($username)) {
	echo "<script>alert('Username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url = login.php'>";
}else if(empty($password)){
	echo "<script>alert('Username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url = login.php'>";
}else if($cek>0){
	session_start();
	$_SESSION['username'] = $username;
	header("location:AdminMasjid/index.html");
	?>
	Anda berhasil Login, Silahkan menuju
	<a href="AdminMasjid/index.html">Halaman Home</a>
	<?php
}else{
	?>
	echo "<script>alert('Username atau Password salah')</script>";
	echo "<meta http-equiv='refresh' content='1 url = login.php'>";
	<?php
	echo mysqli_error($connect);
}
?>