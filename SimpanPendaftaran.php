<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$Nama_Customer=$_POST["nama"];
$Alamat_Customer=$_POST["alamat"];
$Telp_Customer=$_POST["no_hp"];
$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
    $sql_1 ="insert into pengguna (username,nama,password) values
        ('$username','$nama','$password')";
    $sql_2 ="insert into customer (Nama_Customer,Alamat_Customer,Telp_Customer) values
    ('$Nama_Customer','$Alamat_Customer','$Telp_Customer')";

//Mengeksekusi/menjalankan query diatas	
  $hasil1=mysqli_query($koneksi,$sql_1); $hasil2=mysqli_query($koneksi,$sql_2);
  
  

  echo $hasil2;

//Kondisi apakah berhasil atau tidak 
  if ($hasil1 && $hasil2) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>