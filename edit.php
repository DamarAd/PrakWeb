<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="bt/css/bootstrap.min.css">
    </head>
    <body>

<?php
    require_once 'core/init.php';

    if(!$_SESSION['user']){
        header('Location:index.php');
    }

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

    <!-- <form action="edit.php" method="post">
        <div class="form-group">
            <label for="judul" class="col-3">Judul</label>
            <div class="col-3">
                <input type="text" name="judul" class="form-control" value="<?=$judul_awal;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="konten" class="col-3">Konten</label>
            <div class="col-3">    
                <textarea name="konten" id="" rows="10" class="form-control"> <?=$konten_awal;?> </textarea>
            </div>
        </div>
            <div id="error"><?=$error ?></div>
        <div class="col-3">
            <button type="submit" name="submit" class="btn btn-primary">Perbarui</button>
        </div>
    </form>  -->
    <script href="bt/js/bootstrap.min.js"></script>
    </body>
</html>