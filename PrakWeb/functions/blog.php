<?php

function tampilkan(){
    global $link;

    $query = "SELECT * FROM artikel";
    $result = mysqli_query($link,$query) or die ('gagal menampilkan data');

    return $result;
}

function tambah_data($judul, $konten){
    $query = "INSERT INTO artikel (judul, isi) VALUES ('$judul','$konten')";
    return run($query);
}

function run($query){
    global $link;

    if (mysqli_query($link, $query)) {
        return true;
    } else {
        return false;
    }
}

function excerpt($string){
    
}
?>
