<?php
include("config.php");
include("crud_input.php");
?>

<?php
session_start();

if (!isset($_SESSION["email"])) {
    echo "<div class='container'>
    <h2>Anda harus login dulu</h2>
     <br><a style='font-size:30px;' href='login.php'>Klik disini</a></div>";
    exit;
}

$id_users = $_SESSION["id_users"];
$email = $_SESSION["email"];
$nama = $_SESSION["name"];
$photo = $_SESSION["photo"];



?>


<html>

<head>
    <title>Technical Test Dumbways Bootcamp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="<?php echo "index.php" ?>">Technical Test Dumbways</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo "index.php" ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tugas Saya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo "1.php" ?>">Soal 1</a>
                            <a class="dropdown-item" href="<?php echo "2.php" ?>">Soal 2</a>
                            <a class="dropdown-item" href="<?php echo "3.php" ?>">Soal 3</a>
                            <a class="dropdown-item active" href="<?php echo "4.php" ?>">Soal 4</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="jumbotron jumbotron-fluid" style="background-color:yellow;">
            <div class="container">
                <h2 class="display-4">Tugas Nomor 4</h2>
                <p class="lead">Technical Test Dumbways Bootcamp</p>
            </div>
        </div>

        <div id="content">
            <!-- Button trigger modal -->
            <a href="logout.php" type="button" class="btn btn-danger mr-3 float-right">Logout Akun</a>
            <button type="button" class="btn mr-3 btn-primary float-right" data-toggle="modal" data-target="#Modal-postingan">
                Tambah Postingan
            </button>
            <button type="button" class="btn mr-3 btn-warning float-right" data-toggle="modal" data-target="#modalPerintahsql">
                Lihat Query SQL
            </button>
            <div id="hobi" class="card1">
                <?php
                $data = mysqli_query($mysqli, "SELECT * FROM post_tb INNER JOIN users_tb ON users_id = id_users WHERE users_id = " . $_SESSION['id_users'] . ";");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <?php echo "<img src='assets/img/$d[photo]' class='img-fluid img-thumbnail' style='border-radius:50%;' />"; ?><br>

                            </div>
                            <div class="col-md-8">
                                <?php echo "<a class='btn btn-danger btn-sm float-right' href='crud_delete.php?id_post=$d[id_post]'>Hapus X</a>"; ?>

                                <div class="card-body">
                                    <p style="padding-bottom: 50px;"><b>Nama User :</b> <?php echo $d['name']; ?></p>
                                    <?php echo "<img src='assets/img/$d[image]' width='100%' style='padding-bottom: 30px;' />"; ?>
                                    <h4>Isi Content</h4>
                                    <p class="card-text"><?php echo $d['content'] ?></p>

                                    <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#Edit<?php echo $d['id_post'] ?>">Edit Postingan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <aside class="card2">
            <article class="profile" id="data-diri">
                <h2>Biodata</h2>
                <figure>
                    <img src="assets/img/foto1.jpeg" class="featured-image">
                    <figcaption>Foto Diri</figcaption>
                </figure>
                <p>Nama : Alex Jhosan Abdillah</p>
                <p>Email : alexjhosan19@gmail.com</p>
                <p></p>
            </article>
        </aside>

        <aside class="card1">
            <article class="profile">
                <h2>Bismillah</h2>
                <p>Semoga Lolos Phase 1 Bootcamp</p>
                <figure>
                    <img src="https://rumahjahithaifa.com/wp-content/uploads/2010/11/Facebook-like-thumbs-up-symbol.jpg" class="featured-image">
                    <figcaption>Mantap</figcaption>
                </figure>
            </article>
        </aside>
    </main>

    <footer>
        <p>Technical Test Dumbways Phase 1 &#169; 2020</p>
        <p>Author : Alex Jhosan Abdillah</p>
    </footer>

    <!-- Modal Input Postingan -->
    <div class="modal fade" id="Modal-postingan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Postingan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="crud_input.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" hidden class="form-control" name="users_id" id="usersId" aria-describedby="usersId" value="<?php echo  $_SESSION['id_users'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="Postingan">Content</label>
                            <textarea name="content" class="form-control" id="content_post" cols="30" rows="6"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pilih Foto</label>
                            <input class="form-control" name="fileToUpload" type="file" id="formFile">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit_postingan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    $data = mysqli_query($mysqli, "SELECT * FROM post_tb INNER JOIN users_tb ON users_id = id_users WHERE users_id = " . $_SESSION['id_users'] . ";");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <!-- Modal Edit Postingan -->
        <div class="modal fade" id="Edit<?php echo $d['id_post'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Postingan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="crud_update.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" hidden class="form-control" name="idPost" id="idPost" aria-describedby="usersId" value="<?php echo  $d['id_post'] ?>">

                                <input type="text" hidden class="form-control" name="users_id" id="usersId" aria-describedby="usersId" value="<?php echo  $_SESSION['id_users'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="Postingan">Content</label>
                                <textarea name="content" class="form-control" id="content_post" cols="30" rows="6"><?php echo $d['content'] ?></textarea>
                            </div>

                            <div class=" mb-3">
                                <label for="formFile" class="form-label">Pilih Foto</label>
                                <input class="form-control" name="fileToUpload" type="file" id="formFile">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="edit_postingan">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal List Databases -->
    <div class="modal fade" id="modalPerintahsql" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Query SQL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Query Menampilkan Users Beserta Postingannya</h4>
                    <img src="assets/img/perintah_sql/menampilkan_users_sesuai_dengan_isi_postnya.png">
                    <hr style="height: 30px;">
                    <h4>Query Insert Seluruh Data Table Terkait</h4>
                    <h5>Insert Data Users</h5>
                    <img src="assets/img/perintah_sql/insert_data_users.png"><br>
                    <h5>Insert Data Post</h5>
                    <img src="assets/img/perintah_sql/insert_table_post.png">
                    <hr style="height: 30px;">
                    <h4>Query Menampilkan Content Berdasarkan User Tertentu</h4>
                    <img src="assets/img/perintah_sql/menampilkan_content_berdasarkan_usersnya.png">
                    <hr style="height: 30px;">
                    <h4>Query Mengubah Salah Satu Data Users</h4>
                    <img src="assets/img/perintah_sql/merubah_data_user.png">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>