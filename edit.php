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

    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $konten = $_POST['konten'];
        
        if (!empty(trim($judul)) && !empty(trim($konten))) {
            
            if (edit_data($judul,$konten,$id)) {
                header('Location: index.php');
            } else {
                $error = 'ada masalah saat mengedit data';
            }
            
        } else {
            $error = 'judul dan konten wajib diisi'; 
        }
        
    } 
?>

<form action="" method="post">
    <label for="judul">Judul</label>
    <input type="text" name="judul" value="<?=$judul_awal;?>"><br><br>

    <label for="konten">Konten</label>
    <textarea name="konten" id="" cols="40" rows="10"> <?=$konten_awal;?> </textarea><br><br>

    <div id="error"><?=$error ?></div>

    <input type="submit" value="submit" name="submit">
</form> 