<html>

<head>
    <link rel="stylesheet" type="text/css" href="view/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tokoh IT</title>
    <?php
    require_once 'core/init.php';
    $articles = tampilkan();
    ?>
</head>

<header>

</header>

<body>
    <!-- header -->
    <div class="home">
        <div class="header">
            <div id="logo">TIT</div>
            <div id="nav-menu">
                <a href="#beranda">Beranda</a>
                <a href="#artikel">Artikel</a>
                <a href="#tokoh">Tokoh</a>
                <a href="web_pribadi.html">Tentang</a>
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

    <!-- artikel -->
    <div id="artikel"></div>
    <h2>Artikel</h2>
    <div class="main-content">
        <?php while($row = mysqli_fetch_assoc($articles)):?>
        <div class="content">
            <p><?= $row['waktu']?></p>
            <img src="asset/laptop.jpg" alt="laptop" width="380" height="250">
            <h3><a href="single.php?id=<?= $row['id'];?>"><?= $row['judul'];?></a></h3>
            <p><?= excerpt($row['isi']);?></p>
            <a href="edit.php?id=<?= $row['id'];?>">Edit</a>
        </div>
        <?php endwhile; ?>
    </div>
    <a href="add.php">Tambah Artikel</a>
    
    <!-- tokoh -->
    <!-- <div id="tokoh"></div>
    <h2>Tokoh</h2>
    <hr>
    <div class="main-tokoh">
        <div class="list-tokoh">
            <div class="gambar-tokoh">
                <i class="fa fa-user"></i>
            </div>
            <div class="teks-tokoh">
                <span class="nama-tokoh">Nama Tokoh</span>
                <br>
                <span>jabatan</span>
            </div>
        </div>
        <div class="list-tokoh">
            <div class="gambar-tokoh">
                <i class="fa fa-user"></i>
            </div>
            <div class="teks-tokoh">
                <span class="nama-tokoh">Nama Tokoh</span>
                <br>
                <span>jabatan</span>
            </div>
        </div>
        <div class="list-tokoh">
            <div class="gambar-tokoh">
                    <i class="fa fa-user"></i>
            </div>
            <div class="teks-tokoh">
                <span class="nama-tokoh">Nama Tokoh</span>
                <br>
                <span>jabatan</span>
            </div>
        </div>
        <div class="list-tokoh">
            <div class="gambar-tokoh">
                    <i class="fa fa-user"></i>
            </div>
            <div class="teks-tokoh">
                <span class="nama-tokoh">Nama Tokoh</span>
                <br>
                <span>jabatan</span>
            </div>
        </div>
    </div> -->

    <!-- hubungi kami -->
    <div id="dukungan"></div>
    <h2>Dukungan</h2>
    <div class="main-dukungan">
        <div class="saran">
            <h3>Berikan saran anda</h3>
            <input class="saran-input" type="text" placeholder="Nama Anda...">
            <input class="saran-input" type="text" name="Email" placeholder="Email Anda...">
            <textarea class="saran-input" cols="30" rows="10" placeholder="Saran Anda..."></textarea>
            <input type="Submit" value="Kirim">
        </div>
        <div class="langganan">
            <h3>Dapatkan setiap pembaruan</h3>
            <input type="text" placeholder="Email untuk berlangganan">
        </div>
    </div>

    <script>
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