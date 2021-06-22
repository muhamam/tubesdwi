<?php 
if(isset($_GET['email']) && isset($_GET['key'])){ 
        include "koneksi/database.php"; 
        $email1 = $_GET['email'];
        $key1 = $_GET['key'];
$cand2 = mysql_query("SELECT * FROM users WHERE email='$email1' and kode='$key1'");
if(mysql_num_rows($cand2) > 0){
 $has = mysql_query("update users set aktif='y' where email='$email1' and kode='$key1'");
  $sukses1 = '<div class="text-center">
<div class="alert bg-success alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Terimakasih! Akun Anda sudah diaktivasi!</span>
</div></div>'; 
 } else{
                $error5 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Gagal konfirmasi email! Silahkan hubungi Admin.</span>
</div></div>'; 
        }
}
if(isset($_GET['sukses'])) {
		$sukses = '<div class="text-center">
<div class="alert bg-success alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Silahkan cek e-mail (inbox/spam)<br/>untuk aktivasi pendaftaran!</span>
</div></div>';
}
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		$error1 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Email atau username sudah terdaftar!</span>
</div></div>';
	} else if ($_GET['error'] == 2) {
		$sukses = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Username sudah terdaftar!</span>
</div></div>';
	} else if ($_GET['error'] == 3) {
		$error3 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Password belum diisi!</span>
</div></div>';
	} else if ($_GET['error'] == 4) {
		$error4 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Harus diisi dengan benar!</span>
</div></div>';
	}
}
$tanggal = gmdate("d-m-Y H:i:s", time()+60*60*7);
require_once('koneksi/database.php');
 $nama1 = $_POST['username'];
if(isset($_POST['submit'])){
 $nama = $_POST['username'];
 $pass = $_POST['password'];
 

  
$cand21 = mysql_query("SELECT * FROM users WHERE email='$email' or username='$nama'");
if(mysql_num_rows($cand21) > 0){
header('location:daftar.php?error=1');

  } else{
$activation = md5(uniqid(rand(), true));
   $hasil = mysql_query("insert into users(username, password, created) values('$nama','$email','$pass','$tanggal')");
   $pesan = "Halo $nama, \nTerimakasih telah mendaftar di M2A Monitoring! \n\nBerikut adalah detail akun kamu ^_^ \nUsername : $nama \nPassword : $pass ;
   header('location:daftar.php?sukses=daftarnya');
   
  }
 
}

?>
