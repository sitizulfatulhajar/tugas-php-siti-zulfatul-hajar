<?php

// koneksi database
include 'koneksi.php';

//menangkap sebuah data yan dikirim dari form
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

//menginput data ke database
mysqli_query($koneksi, "insert into kelas volue('$id_kelas', '$nama_kelas')");

//mengalihkan halaman kembali ke kelas.php
header("location:kelas.php");

?>