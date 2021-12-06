<?php
include 'connect.php';
if($connect){
    echo "Koneksi dengan MySQL Berhasil !";
}else{
    echo "Koneksi dengan MySQL gagal !" . mysqli_connect_error();
}

$sql = "CREATE TABLE `user` ( 
    `id` INT NOT NULL AUTO_INCREMENT primary key,  
    `username` VARCHAR(150) NOT NULL ,  
    `password` VARCHAR(100) NOT NULL ,  
    `level` INT(5) NOT NULL 
)";

if(mysqli_query($connect, $sql)){
    echo"<br>Table user berhasil dibuat";
}
else{
    echo "<br>Table user gagal dibuat <br>". mysqli_error($connect);
}

mysqli_close($connect);
?>