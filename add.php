<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link rel="stylesheet" href="bt/css/bootstrap.min.css">
</head>
<body>

    <?php
        require_once 'core/init.php';

        if(!$_SESSION['user']){
            header('Location:index.php');
        }

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

    <form action="add.php" method="post">
        <div>
            <div class="form-group">
                <label for="judul" class="col-3">Judul</label>
                <div class="col-3">
                    <input type="text" name="judul" class="form-control" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="konten" class="col-3">Konten</label>
                <div class="col-3">
                    <textarea name="konten" id="" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div id="error"><?=$error ?></div>
            <div class="col-3">
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
            </div>
            <!-- <input type="submit" value="submit" name="submit"> -->
        </div>
    </form>

    <script href="bt/js/bootstrap.min.js"></script>
    </body>
</html>