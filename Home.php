<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<?php
session_start();

    if($_SESSION['status'] == 'login'){
        ?>
    <body>
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
    <center>
        <div class="container mt-3">
        <table class="table table-borderless table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Penerbit</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Function</th>
            </tr>
            </thead>
               
            <?php
        include "connect.php";
    
        $query = "select * from buku";
        $result = mysqli_query($connect, $query);
    
        
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Welcome "'.$_SESSION['username'].'")';
        echo '</script>';
        if(mysqli_num_rows($result) == 0){
            echo "Table masih kosong!";
        }else{
            while($row = mysqli_fetch_assoc($result)){
                
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["penerbit"]?></td>
                <td><?php echo $row["judul"]?></td>
                <td>$<?php echo $row["harga"]?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success" id="edit">Edit</a>
                    <a href="Delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" id="delete">Delete</a>
                </td>
            </tr>
            <?php
            }
        }
        ?> 
        </tbody>
        </table>
        </div>
    </center>
</body>
<?php
}else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Silahkan login terlebih dahulu");location="login_form.html";';
    echo '</script>';
}
?>
</html>