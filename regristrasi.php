<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<body>
	<center><h2>Registrasi</h2><br>
	<form action="" method="POST">
		<table>
			<tr><input type="text" name="nim" placeholder="nim" required maxlength="10"></tr><br><br>
			<tr><input type="text" name="nama" placeholder="nama" required maxlength="25"></tr><br><br>
			<tr><input type="email" name="email" value=@gmail.com ></tr><br><br>
			<tr><input type="submit" name="submit" value="kirim">
		</table>
	</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=$_POST['email'];
   $Error = array();
   if (strlen($_POST['nim'])<=10) {
    $error['nim']="nim harus 10";
   }if(strlen($_POST['nama'])>=25){
    $error['nama']="nama lebih 25";
   }if (empty($email)) {
    $error['email']="email tidak boleh kosong";
  
   }
}
?>
