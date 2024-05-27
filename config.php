<?php
 require "user.php";

 function get($query){
     global $conn;
     $result = mysqli_query($conn, $query);
     $data = [];
     while ($row = mysqli_fetch_assoc($result)) {
         $data[] = $row;
     }
     return $data;
 }

 function simpan($query){
     global $conn;
     mysqli_query($coonn, $query);
     return mysqli_affected_rows($konek);
 }

 function hapus($query){
    global $conn;
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}