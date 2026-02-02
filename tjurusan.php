<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang di kirim dari form
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

// menginput data ke database
mysqli_query($koneksi, "insert into jurusan value('$id_jurusan', '$nama_jurusan')");

// mengalihkan halaman kembali ke *********.php
header("location:jurusan.php");

?>