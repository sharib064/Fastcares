<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fast cares</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
                session_start();
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
                <h1 class="display-3 text-white  ">Doctores</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Doctors</a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4  " >
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Doctors</h1>
                        <a href="appointment.php" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4  " >
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Muhammad Sarb</h4>
                            <p class="text-primary mb-0">Cardiology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  ">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Ahmed Salar</h4>
                            <p class="text-primary mb-0">Orthopedics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  " >
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Uzair Baig</h4>
                            <p class="text-primary mb-0">Neurology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  " >
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Ammar Asdaque</h4>
                            <p class="text-primary mb-0">Dental Surgery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  ">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-5.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Azam ul Haq</h4>
                            <p class="text-primary mb-0">Laboratory</p>
                        </div>
                    </div>
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