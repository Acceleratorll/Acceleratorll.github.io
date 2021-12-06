<?php
session_start();
session_destroy();

echo '<script type ="text/JavaScript">';  
echo 'alert("Anda Berhasil Logout");location="login_form.html";';
echo '</script>';

?>