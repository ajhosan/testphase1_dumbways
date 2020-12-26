<?php
include("config.php");
include("crud_input.php");
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tugas Saya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo "1.php" ?>">Soal 1</a>
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
                <h2 class="display-4">Halaman Login</h2>
                <p class="lead">Technical Test Dumbways Bootcamp</p>
            </div>
        </div>

        <h2>Login dengan PHP</h2><br>
        <div class="row">
            <div class="col">
                <form method="post" action="login_action.php">
                    <div class="form-group">
                        <label>Email Anda:</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>

            <div class="col">
                <div class="card" style="text-align: center;">
                    <div class="card-body">
                        <p>Akses Login Akun 1</p>
                        <p>Email : tester1@tester.com <br> Password : tester1</p>
                        <p>Akses Login Akun 2</p>
                        <p>Email : tester2@tester.com<br>Password : tester2</p>
                        <p>Akses Login Akun 3</p>
                        <p>Email : stevan3@tester3.com<br>Password : tester3</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Technical Test Dumbways Phase 1 &#169; 2020</p>
        <p>Author : Alex Jhosan Abdillah</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>