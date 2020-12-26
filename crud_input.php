<?php
// database
include "config.php";



// if (isset($_POST['submit_skill'])) {

//     // menangkap data yang di kirim dari form
//     $nama = $_POST['nama_skill'];

//     // menginput data ke database
//     $query = "INSERT INTO skill_tb (name_skill) VALUES ('$nama')";
// }


if (isset($_POST['submit_postingan'])) {

    $content = $_POST['content'];
    $users_id = $_POST['users_id'];

    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $image = $_FILES['fileToUpload']['name'];
    $x = explode('.', $image);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];


    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5044070) {
            move_uploaded_file($file_tmp, 'assets/img/' . $image);
            $query = "INSERT INTO post_tb(content, image, users_id) VALUES ('$content', '$image', '$users_id')";
            if (mysqli_multi_query($mysqli, $query)) {
                header("Location:4.php");
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR TIDAK BOLEH LEBIH DARI 5mb';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

    move_uploaded_file($file_tmp, 'assets/img/' . $image);
}
