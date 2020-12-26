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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php" ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tugas Saya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo "1.php" ?>">Soal 1</a>
                            <a class="dropdown-item" href="<?php echo "2.php" ?>">Soal 2</a>
                            <a class="dropdown-item active" href="<?php echo "3.php" ?>">Soal 3</a>
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
                <h2 class="display-4">Tugas Nomor 3</h2>
                <p class="lead">Technical Test Dumbways Bootcamp</p>
            </div>
        </div>

        <div id="content">
            <div id="hobi" class="card1">
                <h1 style="text-align: center;">KUMPULAN SOAL</h1>
                <article class="card mb-4">
                    <img src="assets/img/soal_nomor3.png" alt="" width="100%">
                </article>

                <article class="card">
                    <h3>Jawaban</h3>
                    <br>
                    <h3>Output</h3>
                    <h4>
                        <?php

                        for ($b = 0; $b <= 6; $b++) {
                            for ($j = 1; $j <= $b; $j++) {
                                echo "&nbsp";
                            }
                            for ($b1 = 6; $b1 > $b; $b1--) {
                                echo "*";
                            }
                            for ($b2 = 7; $b2 > $b; $b2--) {
                                echo "*";
                            }
                            echo "<br>";
                        }
                        ?>
                    </h4>
                    <a href="index.php" class="btn btn-primary">Kembali Ke Menu Utama</a>
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