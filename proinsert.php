<?php 

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$db = new PDO ('mysql:host=localhost;dbname=fumafu', 'root', '');
$query = $db->query("insert into murid values ('','$nama','$kelas')");

if($query){
    header("Location:index.php");
}