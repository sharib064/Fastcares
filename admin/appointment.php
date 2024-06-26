<?php

include "../connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}
if(isset($_POST['complete'])){
    $del = "DELETE FROM `appointment` WHERE name='" .$_POST['nm'] ."'";
    $result = $conn->query($del);
    header("location:appointment.php");
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
    <div class="container mx-5">

        <div>
            <h1 class="display-4 text-center fw-bolder text-primary">PATIENT DATA</h1>
        </div>
        <br>
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>problem</th>
                    <th>Complete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `appointment`";
                $result = $conn->query($select);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <form action="appointment.php" method="post">
                        <td>
                            <?php echo $row['name']; ?>
                            <input type="text" name="nm" value='<?php echo $row['name']; ?>' hidden>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['mobile']; ?>
                        </td>
                        <td>
                            <?php echo $row['doctor']; ?>
                        </td>
                        <td>
                            <?php echo $row['date']; ?>
                        </td>
                        <td>
                            <?php echo $row['time']; ?>
                        </td>
                        <td>
                            <?php echo $row['problem']; ?>
                        </td>
                        <td>
                            <input class="btn btn-success" name="complete" type="submit" value="Complete">
                        </td>
                        </form>
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