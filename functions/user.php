<?php

function cek_login($username, $password){
    $username = escape($username);
    $password = escape($password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    global $link;

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) != 0) return true;
        else return false;
    }
}

?>