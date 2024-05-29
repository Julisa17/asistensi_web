<?php
 require "config.php";

 $idBuku = $_GET['id'];
 $hapus = hapus("DELETE FROM perpustakaan WHERE id = $idBuku");

 if ($hapus) {
    header("Location: /Asistensi_web/index.php");
}else {
    echo "System error";
    die();
}
?>