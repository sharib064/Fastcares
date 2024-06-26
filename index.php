<?php

include "connect.php";

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fast Cares</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
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
        <a href="index.php" class="navbar-brand p-0">
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
                <a href="service.php" class="nav-item nav-link">Services</a>
                <?php 
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
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3">Keep You Healthy</h5>
                            <h1 class="display-1 text-white mb-md-4">Take The Best Quality Treatment</h1>
                            <?php 
                                if(!isset($_SESSION['id'])){
                                    echo "<a href='login.php' class='btn btn-primary py-md-3 px-md-5 me-3'>Appointment</a>";
                                    echo "<a href='login.php' class='btn btn-secondary py-md-3 px-md-5'>Contact Us</a>";
                                }else{
                                    echo "<a href='appointment.php' class='btn btn-primary py-md-3 px-md-5 me-3'>Appointment</a>";
                                    echo "<a href='contact.php' class='btn btn-secondary py-md-3 px-md-5'>Contact Us</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3">It's all about your health</h5>
                            <h1 class="display-1 text-white mb-md-4">Take The Best Quality Treatment</h1>
                            <?php 
                                if(!isset($_SESSION['id'])){
                                    echo "<a href='login.php' class='btn btn-primary py-md-3 px-md-5 me-3'>Appointment</a>";
                                    echo "<a href='login.php' class='btn btn-secondary py-md-3 px-md-5'>Contact Us</a>";
                                }else{
                                    echo "<a href='appointment.php' class='btn btn-primary py-md-3 px-md-5 me-3'>Appointment</a>";
                                    echo "<a href='contact.php' class='btn btn-secondary py-md-3 px-md-5'>Contact Us</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Sat</h6>
                            <p class="mb-0"> 10:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                            <?php 
                                if(!isset($_SESSION['id'])){
                                    echo "<a class='btn btn-light' href='login.php'>Appointment</a>";
                                }else{
                                    echo "<a class='btn btn-light' href='appointment.php'>Appointment</a>";
                                }
                            ?>
                        
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select A Service</option>
                            <option value="1">Cardiology</option>
                            <option value="2">Orthopedics</option>
                            <option value="3">Neurology</option>
                            <option value="4">Dental Surgery</option>
                            <option value="5">Laboratory</option>
                        </select>
                        <a class="btn btn-light" href="team.php">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4" >
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">You can take appointment from call this number</p>
                        <h3 class="text-white mb-0">+92123456789</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The Best Hospital That You Can Trust</h1>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Expert Doctors</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Quality Service</h5>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-3">
                            <h2 class="text-primary" data-toggle="counter-up">23</h2>
                            <p class="text-primary">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-3">
                            <h2 class="text-primary" data-toggle="counter-up">150</h2>
                            <p class="text-primary">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-3">
                            <h2 class="text-primary" data-toggle="counter-up">8540</h2>
                            <p class="text-primary">Total Patients</p>
                        </div>
                    </div>
                    
                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-title mb-4">
    <h5 class="position-relative d-inline-block text-primary text-uppercase">Testimonial</h5>
    </div>
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5" >
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Just Superb! Reaching out to an online searched hospital in surat to become one of my best care centers Fast Cares is fabulous i jot doen here i would recommend you to avil international standard service here.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Sir Ali Fathmi</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">The patient-frindly care doctors provide here is somthing more than i ever would thought from nurses to paramedical staff everyone works as a team.I would love to recommend the hospital to others.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Sir Yasir Arafat</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">At Fast Cares services of all department are the best i don't have enough words to appreciate the care they provide Thank you fpr being so much at every junction of my treatment journy.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Muhammad Sarib</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4" >
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Doctors</h1>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Muhammad Sarib</h4>
                            <p class="text-primary mb-0">Cardiology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
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
                <div class="col-lg-4" >
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Uzair baig</h4>
                            <p class="text-primary mb-0">Neurology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
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
                <div class="col-lg-4">
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
    <div class="container-fluid py-5" >
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Services</h5>
                </div>
                <h1>Health Care Solutions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" >
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Cardiology</h4>
                        <p class="mb-4">Cardiology is a branch of medicine that deals with disorders of the heart and the cardiovascular system.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Pulmonary</h4>
                        <p class="mb-4">it is medicine is a broad spqciality in medicine.It deals primarily with diseaases afflicting the lungs.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Neurology</h4>
                        <p class="mb-4">This is the branch of medicine concerned with the study and treatment of the nervous system.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" >
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-wheelchair text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Orthopedics</h4>
                        <p class="mb-4">Orthopedics focuses on treating the musculoskeletal system like muscles,bones,joints,ligaments etc.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-tooth text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Dental Surgery</h4>
                        <p class="mb-4">Dental surgery is any of a number of medical procedures that involves artificially modifying dentition.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Laboratory</h4>
                        <p class="mb-4">Laboratory  is in charge of the safety management of the labpratory concerned.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>
    <script src="js/main.js"></script>

</body>

</html>