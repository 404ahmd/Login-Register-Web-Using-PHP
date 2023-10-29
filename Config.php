<?php

$conn = mysqli_connect("localhost", "root", "", "LoginSystem");
if (!$conn) {
    $die("Koneksi gagal");

}else{
    echo"KOneksi berhasil";
}
?>