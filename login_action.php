<?php
session_start();

include "config.php";

$email = $_POST["email"];
$p = md5($_POST["password"]);

$sql = "SELECT * FROM users_tb WHERE email='$email' AND password='$p'";
$hasil = mysqli_query($mysqli, $sql);
$jumlah = mysqli_num_rows($hasil);


if ($jumlah > 0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["id_users"] = $row["id_users"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["photo"] = $row["photo"];

    header("Location:4.php");
} else {
    echo "Email atau password salah <br><a href='login.php'>Kembali</a>";
}
