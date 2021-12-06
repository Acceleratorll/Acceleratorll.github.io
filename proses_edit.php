<?php

include "connect.php";

$id=$_GET['id'];
$penerbit=$_GET['penerbit'];
$judul=$_GET['judul'];
$harga=$_GET['harga'];

$query = "update buku set 
id='$id', 
penerbit='$penerbit', 
judul='$judul', 
harga='$harga'
where id='$id'";

$result = mysqli_query($connect, $query);

if($result){
    echo "<script> 
            alert('Data dengan ID = $id berhasil diubah!');
            document.location.href = 'Home.php';
        </script>";
    ?>
    <?php
}
else{
    echo "Gagal update data" . mysqli_error($connect);
}
?>