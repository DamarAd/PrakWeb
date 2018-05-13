<?php

function tampilkan(){
    global $link;

    $query = "SELECT * FROM artikel";
    $result = mysqli_query($link,$query) or die ('gagal menampilkan data');

    return $result;
}

function tampilkan_per_id($id){
    global $link;

    $query = "SELECT * FROM artikel WHERE id=$id";
    $result = mysqli_query($link,$query) or die ('gagal menampilkan data');

    return $result;
}

function edit_data($judul,$konten,$id){
    $query = "UPDATE artikel SET judul='$judul', isi='$konten' WHERE id=$id";
    return run($query);
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
    $string = substr($string, 0, 10);
    return $string ."...";
}
?>
