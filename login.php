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

<form action="" method="post">
    <label for="username">username</label>
    <input type="text" name="username" value="" required><br><br>

    <label for="password">password</label>
    <input type="password" name="password" value="" required><br><br>

    <div id="error"><?=$error ?></div><br>
    <input type="submit" value="submit" name="submit">
</form>

<?php } ?> 