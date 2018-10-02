<?php
 $hostname   	= "localhost";
 $username 		= "root";
 $pass     		= "";
 $db       		= "pendaftaran";
 $koneksi    	= new mysqli($hostname, $username, $pass, $db);

 if($koneksi==false){
  die("koneksi gagal". $koneksi->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=$_POST['email'];
 
 $sql="INSERT INTO pendaftaran (nim,nama,email) VALUES ('$nim','$nama','$email')";
   if(mysqli_query($koneksi,$sql)){
    echo "Database Masuk";
   }else{
    echo "gagal konek";;
   }
}
 ?>