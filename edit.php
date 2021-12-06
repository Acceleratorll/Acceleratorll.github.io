<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
session_start();

    if($_SESSION['status'] == 'login'){
        ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a href="Home.php" class="navbar-brand"><img src="https://api.freelogodesign.org/assets/thumb/logo/21782865_400.png" style="width:40px; margin-left:20px;" class="rounded-pill"></a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="Home.php" id="user" class="nav-link disabled"><?php echo $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="Insert_form.php" class="nav-link">Insert</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    
    include "connect.php";
    $id=$_GET['id'];
    $query = "select * from buku where id='$id'";
    $result = mysqli_query($connect, $query);
    
    ?>
    <form action="proses_edit.php" method="get">
        <?php
        while($row=mysqli_fetch_array($result)){
            ?>
                <div class="container-sm p-5 my-5 bg-dark text-white" style="width: 50%;">
                    <legend align="center">Form Edit</legend>
                    <div class="mb-3">
                        <label for="exampleUsername" class="form-label">ID</label>
                        <input type="number" class="form-control form-control-lg" name="id" value="<?php echo$row['id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleUsername" class="form-label">Penerbit</label>
                        <input type="text" class="form-control form-control-lg" name="penerbit" value="<?php echo$row['penerbit'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleUsername" class="form-label">Judul</label>
                        <input type="text" class="form-control form-control-lg" name="judul" value="<?php echo$row['judul'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleUsername" class="form-label">Harga</label>
                        <input type="number" class="form-control form-control-lg" name="harga" value="<?php echo$row['harga'];?>">
                    </div>
                    <div class="mb-3" align="center">
                        <button type="submit" class="btn btn-success btn-lg" name="edit-btn" id="btn">Edit</button>
                    </div>
            </div>
            <?php
        }
        ?>
    </form>
</body>
<?php
}else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Silahkan login terlebih dahulu");location="login_form.html";';
    echo '</script>';
}
?>
</html>