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

<h1 id="judul_single">
    <?=$judul_awal;?>
</h1>

<p id="isi_single">
    <?=$konten_awal;?>
</p>