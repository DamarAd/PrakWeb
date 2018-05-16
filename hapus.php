<?php
include 'core/init.php';
$id = $_GET['id'];

$query = mysqli_query($link, "SELECT * FROM uploud WHERE id='$id'");
$data = mysqli_fetch_array($query);
$namafile = $data['name'];

$query = mysqli_query($link, "DELETE FROM uploud WHERE id='$id'");

unlink("data/".$namafile);
echo "File telah dihapus";
header("Location:list_uploud.php");
?>