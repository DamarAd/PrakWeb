<?php
include 'core/init.php';
$id = $_GET['id'];
$query = mysqli_query($link, "SELECT * FROM uploud WHERE id='$id'");
$data = mysqli_fetch_array($query);

header("Content-Disposition:attachment; filename=".$data['name']);

header("Content-length: ".$data['size']);

header("Content-type: ".$data['type']);

$fp = fopen("data/".$data['name'],'r');
$content = fread($fp, filesize('data/'.$data['name']));
fclose($fp);

echo $content;
exit;
?>