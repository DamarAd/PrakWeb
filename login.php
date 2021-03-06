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
        
        if(isset($_SESSION['user'])){
            header('Location:index.php');
        } else {
        
        $error = '';

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            if (!empty(trim($username)) && !empty(trim($password))) {
                
                if (cek_login($username,$password)) {
                    $_SESSION['user'] = $username;
                    header('Location: index.php');
                } else {
                    $error = 'Username atau password salah';
                }
                
            } else {
                $error = 'username dan password wajib diisi'; 
            }
            
        }
        
    ?>


    <form action="login.php" method="post">
        <div class="form-group">    
            <div class="col-3">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group">            
            <div class="col-3">
            <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-3">
                <div id="error" class="text-danger"><?=$error ?></div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>

    <?php } ?> 
    <script href="bt/js/bootstrap.min.js"></script>
    </body>
</html>