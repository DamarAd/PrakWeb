<?php
    require_once 'core/init.php';

    $error = '';

    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $konten = $_POST['konten'];
        
        if (!empty(trim($judul)) && !empty(trim($konten))) {
            
            if (tambah_data($judul,$konten)) {
                header('Location: index.php');
            } else {
                $error = 'ada masalah saat menambah data';
            }
            
        } else {
            $error = 'judul dan konten wajib diisi'; 
        }
        
    }
?>

<form action="" method="post">
    <label for="judul">Judul</label>
    <input type="text" name="judul" value=""><br><br>

    <label for="konten">Konten</label>
    <textarea name="konten" id="" cols="40" rows="10"></textarea><br><br>

    <div id="error"><?=$error ?></div>

    <input type="submit" value="submit" name="submit">
</form>