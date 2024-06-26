<?php
    include "connect.php"; 
    
    session_start();

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("location:login.php");
    }

if(isset($_POST['add']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $doctor = $_POST['doctor'];
    $date =  $_POST['date'];
    $time = $_POST['time'];
    $problem = $_POST['problem'];

    $insert = "INSERT INTO `appointment`(`name`, `email`, `mobile`, `doctor`, `date`, `time`, `problem`) VALUES ('$name','$email','$mobile','$doctor','$date','$time','$problem')";
    
    $result = $conn->query($insert);

    
    if ($result) {
        header("location:index.php");
        }
    } else {
        echo "";
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
</head>

<body>
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Sat : 10.00 am - 09.00 pm</small>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary">Fast Cares</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="team.php" class="nav-item nav-link">Our Docters</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="service.php" class="nav-item nav-link">Services</a><?php 
                if(!isset($_SESSION['id'])){
                    echo "<a href='registration.php' class='nav-item nav-link'>Registration</a></div>";
                    echo "<a class='nav-link' href='login.php'><button class='btn btn-primary text-light fw-bold'>LOG IN</button></a>";
                }else{
                    echo "<a class='nav-link' href='appointment.php'><button class='btn btn-primary text-light fw-bold'>Appointment</button></a>";
                    echo "<a class='nav-link' href='logout.php'><button name='logout' class='btn btn-primary text-light fw-bold'>Logout</button></a>";
                }
            ?>
            </div>
    </nav>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary bg-appointment mb-5  ">
        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wo">
            <h1 class="text-white mb-4">Make Appointment</h1>
            <form method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"  name="name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" name="email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" name="mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" name="doctor" style="height: 55px;">
                                        <option selected>Choose Doctor</option>
                                        <option value="Muhammad Sarib">Muhammad Sarib</option>
                                        <option value="Ahmed Salar">Ahmed Salar</option>
                                        <option value="Uzair Baig">Uzair Baig</option>
                                        <option value="Ammar Asdaque">Ammar Asdaque</option>
                                        <option value="Azam ul Haq">Azam ul Haq</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" name="time"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" name="problem" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" id= "btn" type="submit" name="add">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
