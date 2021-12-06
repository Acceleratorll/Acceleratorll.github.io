<?php
$namaHost = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($namaHost, $username, $password);

if($connect){
    echo "Koneksi dengan MySQL Berhasil !";
}else{
    echo "Koneksi dengan MySQL gagal !" . mysqli_connect_error();
}

$sql = "create database buku";
if(mysqli_query($connect, $sql)){
    echo"Database berhasil dibuat";
}
else{
    echo "Database gagal dibuat <br>". mysqli_error($connect);
}

mysqli_close($connect);
?>