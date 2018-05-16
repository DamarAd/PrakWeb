<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="view/index-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ebook Pemrogaman</title>
    <?php
        include 'core/init.php';

        $login = false;
        if(isset($_SESSION['user'])){
            $login = true;
        }    
    ?>
</head>
<header>
<div class="home">
        <div class="header">
            <div id="logo">Jurnal IT</div>
            <div id="nav-menu">
                <a href="index.php">Beranda</a>
<<<<<<< HEAD
                <a href="index.php">Artikel</a>
                <a href="index.php">Saran</a>
=======
                <a href="index.php#artikel">Artikel</a>
                <a href="index.php#dukungan">Saran</a>
>>>>>>> ed6675d02fac83682fd6e0733e2338475902dadb
                <a href="list_uploud.php">Ebook Pemrogaman</a>

            <?php if($login == true):?>
                <a href="logout.php">Logout</a>
            <?php else:?>
                <a href="login.php">Login</a>
            <?php endif;?>

            </div>
        </div>
        <div class="latardepan">
            <div id="latar1">
                <img src="asset/tim.jpg" alt="foreground">
                <span>Mengenal Karakter
                    <br> Para Penggiat IT</span>
            </div>
        </div>
        <div class="latardepan">
            <div id="latar2">
                <img src="asset/cat.jpg" alt="foreground">
                <span>Kucing
                    <br> Alas </span>
            </div>
        </div>
        <div class="latardepan">
            <div id="latar3">
                <img src="asset/jas.jpg" alt="foreground">
                <span>Jas
                    <br> Kering </span>
            </div>
        </div>
        <div class="latardepan">
            <div id="latar4">
                <img src="asset/wall.jpg" alt="foreground">
                <span>Dinding
                    <br> Saja </span>
            </div>
        </div>
        <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
        <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
    </div>
</header>

<body>
    <?php
        if($login == true){
            echo "<h2><a href='form_uploud.html'>Tambah Ebook</a></h2>";         
        }
    ?>
    
    <?php
        $query = mysqli_query($link,"SELECT * FROM uploud");
        while ($data = mysqli_fetch_array($query)){
        echo "<p><a href='download.php?id=".$data['id']."'>".$data['name']."</a>(".$data['size']." bytes)</p>";
            if($login == true){
                echo "<a href='hapus.php?id=".$data['id']."'>Delete</a>";
            }
        }
    ?>
    <script href="bt/js/bootstrap.min.js">
        var index = 1;

        function plusIndex(n){
            index = index + 1;
            showImage(index);
        }

        showImage(1);

        function showImage(n) {
            var i;
            var x = document.getElementsByClassName("latardepan");
            if (n > x.length) { index = 1 };
            if (n < 1) { index = x.length };
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[index - 1].style.display = "block";
        }
        autoSlide();
        function autoSlide(){
            var i;
            var x = document.getElementsByClassName("latardepan");
            for(i=0;i<x.length;i++){
                x[i].style.display = "none";
            }
            if(index > x.length){ index = 1}
            x[index-1].style.display = "block";
            index++;
            setTimeout(autoSlide,2000);
        }

    </script>
</body>
</html>

