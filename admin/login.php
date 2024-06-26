<?php 

include "../connect.php";

session_start();

if(isset($_POST['add']))
{
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $select = "SELECT * FROM `admin` WHERE id='$id' AND pass='$pass'";

    $result = $conn->query($select);

    $count = mysqli_num_rows($result);

    if($count > 0)
    {
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Fast cares</title>
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <div class="card-header bg-primary text-white text-center rounded-top">
                <h1 class="text-font fw-bolder m-3">Admin Login</h1>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="adminId" name="id" placeholder="Enter Admin ID">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control " id="passId" name="pass" placeholder="Enter Password">
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-outline-primary">Login</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>