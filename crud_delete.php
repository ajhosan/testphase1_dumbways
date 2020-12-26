<?php
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_post'];


// menghapus data dari database
mysqli_query($mysqli, "delete from post_tb where id_post='$id'");

// mengalihkan halaman kembali ke index.php
header("location:4.php");
