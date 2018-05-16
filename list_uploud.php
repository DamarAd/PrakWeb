<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="view/style.css">
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
            <div id="logo">TIT</div>
            <div id="nav-menu">
                <a href="index.php">Beranda</a>
                <a href="index.php">Artikel</a>
                <a href="index.php">Saran</a>
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
    
</body>
</html>

