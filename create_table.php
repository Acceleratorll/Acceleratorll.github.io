<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$db = "buku";

$connect = mysqli_connect($namaHost, $username, $password, $db);

if($connect){
    echo "Koneksi dengan MySQL Berhasil !";
}else{
    echo "Koneksi dengan MySQL gagal !" . mysqli_connect_error();
}

$sql = "create table buku(
    id int primary key,
    penerbit varchar(100),
    judul varchar(150),
    harga int not null
)";

if(mysqli_query($connect, $sql)){
    echo"Table buku berhasil dibuat";
}
else{
    echo "Table buku gagal dibuat <br>". mysqli_error($connect);
}

mysqli_close($connect);
?>