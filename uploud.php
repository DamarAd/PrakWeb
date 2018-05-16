<?php
$uplouddir = 'data/';
$filename = $_FILES['userfile']['name'];
$tmpname = $_FILES['userfile']['tmp_name'];
$filesize = $_FILES['userfile']['size'];
$filetype = $_FILES['userfile']['type'];

include "core/init.php";
$query = mysqli_query($link, "SELECT count(*) as jum FROM uploud WHERE name='$filename'");
$data = mysqli_fetch_array($query);
if ($data['jum'] > 0) {
    $query = mysqli_query($link, "UPDATE uploud SET size = '$filesize' WHERE name = '$filename'");
} else {
    $query = mysqli_query($link, "INSERT INTO uploud (name, size, type) VALUES ('$filename','$filesize', '$filetype')");
}

$uploudfile = $uplouddir . $filename;
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploudfile)) {
    echo "File telah diuploud";
    header("Location:list_uploud.php");
} else {
    echo "File gagal diuploud";
    header("Location:list_uploud.php");
}
?>