<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="bt/css/bootstrap.min.css">
        <link rel="stylesheet" href="view/single-style.css">
    </head>
    <body>

    <?php
        require_once 'core/init.php';

        $error = '';
        $id = $_GET['id'];

        if(isset($_GET['id'])){
            $article = tampilkan_per_id($id);
            while($row = mysqli_fetch_assoc($article)){
                $judul_awal = $row['judul'];
                $konten_awal = $row['isi'];
            }
        }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <div class="nav justify-content-center">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Artikel</a>
                <a class="nav-item nav-link" href="#">Saran</a>
                <a class="nav-item nav-link" href="#">Ebook Pemrograman</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-14">
            <img src="asset/tim.jpg" alt="Tim" class="img-fluid">
        </div>
    </div>
        <div class="col">
            <h1 id="judul_single">
                <?=$judul_awal;?>
            </h1><br>
            <p id="isi_single">
                <?=$konten_awal;?>
            </p>
        </div>
    </div>
<script href="bt/js/bootstrap.min.js"></script>
    </body>
</html>