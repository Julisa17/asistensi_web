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
     mysqli_query($conn, $query);
     return mysqli_affected_rows($conn);
 }

 function hapus($query){
    global $conn;
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}