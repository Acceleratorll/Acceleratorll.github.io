<?php
include "connect.php";

$id=$_GET['id'];
$penerbit=$_GET['penerbit'];
$judul=$_GET['judul'];
$harga=$_GET['harga'];

$sql = "insert into buku(id, penerbit, judul, harga)
    values('$id', '$penerbit', '$judul', '$harga')";

if(mysqli_query($connect, $sql)){
    echo "<script> 
            alert('Data berhasil ditambahkan !');
            document.location.href = 'Home.php';
        </script>";
}
else{
    echo "<script> 
            alert('Data gagal ditambahkan. Coba lagi !');
            document.location.href = 'Insert.php';
        </script> <br>";
}
mysqli_close($connect);
?>