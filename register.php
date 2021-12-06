<?php
include 'connect.php';

$username=$_POST['username'];
$password= md5($_POST['password']);
$level= $_POST['level'];

$sql = "insert into user(id, username, password, level)
    values('', '$username', '$password', '$level')";

if(mysqli_query($connect, $sql)){
    echo "<script> 
            alert('Data akun berhasil ditambahkan !');
            document.location.href = 'login_form.html';
        </script>";
}
else{
    echo "<script> 
            alert('Data akun gagal ditambahkan. Coba lagi !');
            document.location.href = 'register_form.html';
        </script> <br>";
}
mysqli_close($connect);
