<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$id = $_POST['id'];

$database = new PDO('mysql:host=localhost;dbname=fumafu', 'root', '');
$query = $database->query("UPDATE `murid` SET `nama` = '$nama', `kelas` = '$kelas' WHERE `id`= '$id'");

if($query){
    header("Location:index.php");
}