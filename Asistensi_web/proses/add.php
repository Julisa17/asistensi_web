<?php 
  require "../config.php";

$judulBuku = $_POST['Judul'];
$penulisBuku = $_POST['Penulis'];
$query = "INSERT INTO perpustakaan (Judul, Penulis) VALUES('$judulBuku','$penulisBuku')";
$masukData = simpan($query);

if ($masukData) {
    header("Location: ../index.php");
}else {
    echo "System error";
    die();
}
?>