<?php

include "connect.php";
$id=$_GET['id'];
$query = "delete from buku where id='$id'";
$result = mysqli_query($connect, $query);

if($result){
    echo "<script> 
            alert('Data dengan ID = $id berhasil dihapus !');
            document.location.href = 'Home.php';
        </script>";
}
else{
    echo "Data gagal dihapus". mysqli_error($connect);
}
?>