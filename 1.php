<html>

<head>
    <title>Technical Test Dumbways Bootcamp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css ">
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
                            <a class="dropdown-item active" href="<?php echo "1.php" ?>">Soal 1</a>
                            <a class="dropdown-item" href="<?php echo "2.php" ?>">Soal 2</a>
                            <a class="dropdown-item" href="<?php echo "3.php" ?>">Soal 3</a>
                            <a class="dropdown-item" href="<?php echo "login.php" ?>">Soal 4</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="jumbotron jumbotron-fluid" style="background-color:yellow;">
            <div class="container">
                <h2 class="display-4">Tugas Nomor 1</h2>
                <p class="lead">Technical Test Dumbways Bootcamp</p>
            </div>
        </div>

        <div id="content">
            <div id="hobi" class="card1">
                <h1 style="text-align: center;">SOAL 1</h1>
                <article class="card mb-4">
                    <h3>Nomor 1</h3>

                    <img src="assets/img/soal_nomor1.png" alt="" width="100%">
                </article>

                <article class="card">
                    <h3 style="text-align: center;">JAWABAN</h3>
                    <form id="form1" name="form1" method="post" action="penghitung_gaji.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Isikan nama anda...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gaji Anda</label>
                            <input type="number" name="gaji" class="form-control" id="exampleInputEmail1" placeholder="Berapa gaji anda perbulan...?">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lama Kerja</label>
                            <input type="number" name="bulan" class="form-control" id="exampleInputEmail1" placeholder="Berapa bulan anda telah bekerja...">
                        </div>
                        <p>Apakah Memiliki Tunjangan?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ya" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tidak" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Simpan</button>
                        <button type="reset" class="btn btn-danger" name="hapus">Hapus</button>
                    </form>
                </article>
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




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>