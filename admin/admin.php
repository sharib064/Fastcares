<?php

include "../connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $insert = "INSERT INTO `admin`(`id`, `pass`) VALUES ('$id','$pass')";

    $result = $conn->query($insert);

    if ($result) {
        header("location:admin.php");
    } else {
        echo "error";
    }
}

if (isset($_POST['btnupdate'])) {

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $update = "UPDATE `admin` SET `id`='$id',`pass`='$pass' WHERE id='" .$_GET['edit'] ."'";

    $result = $conn->query($update);

    if ($result) {
        header("location:admin.php");
    }
}

if (isset($_GET['edit'])) {
    $sel = "select * from admin where id='".$_GET['edit']."'";
    $result = $conn->query($sel);
    $row = mysqli_fetch_array($result);
}

if (isset($_GET['del'])) {
    $del = "DELETE FROM `admin` WHERE id='$_GET[del]'";
    $result = $conn->query($del);
    header("location:admin.php");
}

if (isset($_POST['clear'])) {
    header("location:admin.php");
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
<div class="m-lg-4">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link fw-bold" href="index.php">User Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="appointment.php">Appointment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="admin.php">Admin Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="contact.php">Contact Data</a>
            </li>
            <form method="POST">
            <button type="submit" name="logout" class="btn btn-primary text-light fw-bold">LOG OUT</button>
            </form>
        </ul>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width: 800px;">
            <div class="card-header bg-primary text-white text-center rounded-top">
                <h1 class="text-font fw-bolder m-3">ADD ADMIN</h1>
            </div>
            <div class="card-body">
                <form id="addAdminForm" method="POST">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="adminId" name="id" value="<?php if(isset($_GET['edit'])) echo $row['id'] ?>"
                                placeholder="Enter Admin ID" required>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="pass" value="<?php if(isset($_GET['edit'])) echo $row['pass'] ?>"
                                placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="text-center">
                    <?PHP if (isset($_GET['edit'])) { ?>
                        <button type="submit" class="btn btn-outline-warning" name="btnupdate">UPDATE</button>
                        <button type="submit" name="clear" class="btn btn-outline-secondary">CANCEL</button>
                    <?PHP } else { ?>
                        <button type="submit" class="btn btn-primary" name="add">Add</button>
                        <button type="reset" class="btn btn-outline-primary ml-2">Clear</button>
                    <?PHP } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>

    <div class="container mx-5">
        <div>
            <h1 class="display-4 text-center fw-bolder text-primary">ADMIN DATA</h1>
        </div>
        <br>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `admin`";
                $result = $conn->query($select);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['pass']; ?>
                        </td>
                        <td>
                            <a href="admin.php?edit=<?PHP echo $row['id']; ?>" class="btn btn-outline-warning btn-sm"><span
                                    class="fa fa-edit"></span></a>
                            <a href="admin.php?del=<?PHP echo $row['id']; ?>"
                                onclick="return confirm('ARE YOU SURE TO DELETE?');"
                                class="btn btn-outline-danger btn-sm"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <script>
        $(document).ready(function () {
            $("#myTable").dataTable();
        });
    </script>
</body>

</html>