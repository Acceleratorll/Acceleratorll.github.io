<?php
include 'connect.php';

$username=$_POST['username'];
$password= md5($_POST['password']);

$sql = "select * from user where username ='$username' and password='$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$cek = mysqli_num_rows($result);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    if($row['level'] == 1){
        header('location:Home.php');
    }else if($row['level'] == 2){
        header('location:Home_guest.php');
    }
}else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Username atau Password Anda salah");location="login_form.html";';
    echo '</script>';
    echo mysqli_error($connect);
}