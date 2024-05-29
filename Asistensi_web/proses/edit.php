<?php
require "../config.php";
$idBuku = $_POST["id"];
$judulBuku = $_POST["Judul"];
$penulisBuku = $_POST["Penulis"];

$updated = simpan("UPDATE perpustakaan SET Judul = '$judulBuku', Penulis ='$penulisBuku' WHERE id = $idBuku");

if ($updated) {
    header("Location:../index.php");
}else {
    echo "System error edit data ";
    die();
}
?>