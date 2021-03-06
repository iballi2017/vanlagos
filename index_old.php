<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Van Lagos</title>
    <!-- favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/gif" sizes="16x16">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="./css/animate.css">
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg main-nav-bar sticky-top">

        <div class="container">
            <a class="navbar-brand" href="./">
                <h2>Brand Logo</h2>
            </a>
            <button class="navbar-toggler mobile-menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-1x"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="./user/about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="#" target="_blank">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="./user/contact-us-alt.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="./user/user-account-profile.php"><i
                                class="fas fa-user"></i> My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-custom-green-outline custom-nav-btn px-3 mx-md-2" href="./user/login.php">Sign
                            In</a>
                    </li>
                    <li class="nav-item mt-2 mt-md-0">
                        <a class="btn btn-sm btn-custom-green-outline custom-nav-btn px-3 mx-md-2" href="./user/register.php">Sign
                            Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="#"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        <section class="hero">
            <div class="container">
                <div class="text-content-top">
                    <div class="hero-title">
                        <h2 class="animated fadeInDown delay-1s">We are always there at your service</h2>
                        <h1 class="animated fadeInUp delay-1s">FAST and RELIABLE way to find QUALITY anywhere you need it
                        </h1>
                    </div>
                </div>
            </div>


        </section>
        <!--  -->
        <section class="index-booking-form userHireForm">
            <!-- <div class="card-body bg-white"> -->
            <div class="form-wrapper card-body p-0">
                <ul class="nav nav-pills row hero-main-nav-pills  m-0" id="pills-tab" role="tablist">
                    <li class="nav-item col-6 text-center p-0">
                        <a class="nav-link hero-tab-nav-links active curve-left-top px-5 btn-lg" id="pills-hirevan-tab" data-toggle="pill" href="#pills-hirevan" role="tab" aria-controls="pills-hirevan" aria-selected="true">VAN
                            HIRE</a>
                    </li>
                    <li class="nav-item col-6 text-center p-0">
                        <a class="nav-link hero-tab-nav-links curve-right-top px-5 btn-lg" id="pills-hirebus-tab" data-toggle="pill" href="#pills-hirebus" role="tab" aria-controls="pills-hirebus" aria-selected="false">BUS
                            HIRE</a>
                    </li>
                </ul>
                <div class="tab-content bg-white py-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-hirevan" role="tabpanel" aria-labelledby="pills-hirevan-tab">
                        <!-- VAN HIRE FORM OPENS -->
                        <form action="#" class="container">
                            <!-- Pick-up place -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="pickUpAddress" class="m-0">Pick-up</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="text" id="pickUpAddress" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="state" id="state">
                                                        <option value="default" selected>State</option>
                                                        <option value="lagos">Lagos</option>
                                                        <option value="lagos">Abuja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Drop-off place -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="dropOffAddress" class="m-0">Drop-off</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="text" id="dropOffAddress" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="state" id="state">
                                                        <option value="default" selected>State</option>
                                                        <option value="lagos">Lagos</option>
                                                        <option value="lagos">Abuja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Pick-up Date -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="pickupDate" class="m-0 pick-up-label fontawesome-pseudo">Pick-up</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="date" id="pickupDate" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="dropOffTime" id="dropOffTime">
                                                        <option value="default" selected>Time</option>
                                                        <option value="10am">10:00AM</option>
                                                        <option value="2pm">2:00PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Drop-off Date -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="dropOffDate" class="m-0 pick-up-label fontawesome-pseudo">Drop-off</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="date" id="dropOffDate" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="dropOffTime" id="dropOffTime">
                                                        <option value="default" selected>Time</option>
                                                        <option value="10am">10:00AM</option>
                                                        <option value="2pm">2:00PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Link button -->
                            <div class="row">
                                <div class="col"><button type="submit" class="btn my-2 custom-form-btn">Continue
                                        Reservation</button>
                                </div>
                            </div>
                        </form>
                        <!-- VAN HIRE FORM CLOSES -->
                    </div>
                    <div class="tab-pane fade" id="pills-hirebus" role="tabpanel" aria-labelledby="pills-hirebus-tab">

                        <!-- BUS HIRE FORM OPENS -->

                        <form action="#" class="container">
                            <!-- Pick-up place -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="pickUpAddress" class="m-0">Pick-up</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="text" id="pickUpAddress" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="state" id="state">
                                                        <option value="default" selected>State</option>
                                                        <option value="lagos">Lagos</option>
                                                        <option value="lagos">Abuja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Drop-off place -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="dropOffAddress" class="m-0">Drop-off</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="text" id="dropOffAddress" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="state" id="state">
                                                        <option value="default" selected>State</option>
                                                        <option value="lagos">Lagos</option>
                                                        <option value="lagos">Abuja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Pick-up place -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="pickupDate" class="m-0 pick-up-label fontawesome-pseudo">Pick-up</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="text" id="pickupDate" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="dropOffTime" id="dropOffTime">
                                                        <option value="default" selected>Time</option>
                                                        <option value="10am">10:00AM</option>
                                                        <option value="2pm">2:00PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Drop-off place -->
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-9">
                                    <div class="border m-1 rounded">
                                        <div class="row no-gutters">
                                            <div class="col-5 col-md-4 py-1 px-2 bg-light">
                                                <label for="dropOffDate" class="m-0 pick-up-label fontawesome-pseudo">Drop-off</label>
                                            </div>
                                            <div class="col-7 col-md-8 py-1 px-3">
                                                <input type="text" id="dropOffDate" class="border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="border m-1 rounded">
                                        <div class="row">
                                            <div class="col py-1 px-3">
                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                    <select class="border-0" name="dropOffTime" id="dropOffTime">
                                                        <option value="default" selected>Time</option>
                                                        <option value="10am">10:00AM</option>
                                                        <option value="2pm">2:00PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Link button -->
                            <div class="row">
                                <div class="col"><button type="submit" class="btn my-2 custom-form-btn">Continue
                                        Reservation</button>
                                </div>
                            </div>
                        </form>
                        <!-- BUS HIRE FORM CLOSES -->
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </section>


        <section class="why-choose-us my-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-title mb-5">Why Choose us</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <ul class="why-choose-us-list">
                            <li><img src="./images/punctuality.png" class="img img-fluid" alt="">
                                <p><strong>Puntuality</strong></p>
                            </li>
                            <li><img src="./images/air-condition.png" class="img img-fluid" alt="">
                                <p>
                                    <strong>Air Conditioned
                                        Buses</strong>
                                </p>
                            </li>
                            <li><img src="./images/comfort.png" class="img img-fluid" alt="">
                                <p><strong>Refreshment</strong></p>
                            </li>
                            <li><img src="./images/refreshment.png" class="img img-fluid" alt="">
                                <p><strong>Comfortable seats
                                        & leg space</strong></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white py-5" id="pricingSection">
            <div class="container">
                <h3 class="text-center">Pricing</h3>
                <div class="row no-gutters">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card m-2">
                            <div class="card-header text-center">
                                <span class="desc-icons">
                                    <img src="./images/punctuality.png" class="img-fluid" alt="">
                                    <img src="./images/air-condition.png" class="img-fluid" alt="">
                                    <img src="./images/refreshment.png" class="img-fluid" alt="">
                                    <img src="./images/comfort.png" class="img-fluid" alt="">
                                </span>
                            </div>
                            <picture class="py-2 text-center" style="width: 70%; margin: 0 auto">
                                <source srcset="./images/vehicle-1.png" media="(min-width: 800px)">
                                <source srcset="./images/vehicle-2.png" media="(min-width: 800px)">
                                <img src="./images/vehicle-3.png" class="img-fluid" alt="" />
                            </picture>
                            <!-- <img src="./images/vehicle-1.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <div class="card-text mb-2">
                                    <div class="item-name">Van hire within Lagos</div>
                                    <div>
                                        <span class="price"><span>N</span><span>40,000</span></span>&nbsp;<small>Daily
                                            rate</small>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase">Hire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card m-2">
                            <div class="card-header text-center">
                                <span class="desc-icons">
                                    <img src="./images/punctuality.png" class="img-fluid" alt="">
                                    <img src="./images/air-condition.png" class="img-fluid" alt="">
                                    <img src="./images/refreshment.png" class="img-fluid" alt="">
                                    <img src="./images/comfort.png" class="img-fluid" alt="">
                                </span>
                            </div>
                            <picture class="py-2 text-center" style="width: 70%; margin: 0 auto">
                                <source srcset="./images/vehicle-1.png" media="(min-width: 800px)">
                                <source srcset="./images/vehicle-2.png" media="(min-width: 425px)">
                                <img src="./images/vehicle-3.png" class="img-fluid" alt="" />
                            </picture>
                            <!-- <img src="./images/vehicle-1.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <div class="card-text mb-2">
                                    <div class="item-name">Van hire within Lagos</div>
                                    <div>
                                        <span class="price"><span>N</span><span>40,000</span></span>&nbsp;<small>Daily
                                            rate</small>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase">Hire now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card m-2">
                            <div class="card-header text-center">
                                <span class="desc-icons">
                                    <img src="./images/punctuality.png" class="img-fluid" alt="">
                                    <img src="./images/air-condition.png" class="img-fluid" alt="">
                                    <img src="./images/refreshment.png" class="img-fluid" alt="">
                                    <img src="./images/comfort.png" class="img-fluid" alt="">
                                </span>
                            </div>
                            <picture class="py-2 text-center" style="width: 70%; margin: 0 auto">
                                <source srcset="./images/vehicle-1.png" media="(min-width: 800px)">
                                <source srcset="./images/vehicle-2.png" media="(min-width: 800px)">
                                <img src="./images/vehicle-3.png" class="img-fluid" alt="" />
                            </picture>
                            <!-- <img src="./images/vehicle-1.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <div class="card-text mb-2">
                                    <div class="item-name">Van hire within Lagos</div>
                                    <div>
                                        <span class="price"><span>N</span><span>40,000</span></span>&nbsp;<small>Daily
                                            rate</small>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase">Hire now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card m-2">
                            <div class="card-header text-center">
                                <span class="desc-icons">
                                    <img src="./images/punctuality.png" class="img-fluid" alt="">
                                    <img src="./images/air-condition.png" class="img-fluid" alt="">
                                    <img src="./images/refreshment.png" class="img-fluid" alt="">
                                    <img src="./images/comfort.png" class="img-fluid" alt="">
                                </span>
                            </div>
                            <picture class="py-2 text-center" style="width: 70%; margin: 0 auto">
                                <source srcset="./images/vehicle-1.png" media="(min-width: 800px)">
                                <source srcset="./images/vehicle-2.png" media="(min-width: 800px)">
                                <img src="./images/vehicle-3.png" class="img-fluid" alt="" />
                            </picture>
                            <!-- <img src="./images/vehicle-1.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <div class="card-text mb-2">
                                    <div class="item-name">Van hire within Lagos</div>
                                    <div>
                                        <span class="price"><span>N</span><span>40,000</span></span>&nbsp;<small>Daily
                                            rate</small>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase">Hire now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works">
            <div class="container-fluid" style="height: 100%;">
                <div class="row" style="height: 100%;">
                    <div class="col-12 col-md-6 offset-md-6 content-area pl-5" style="height: 100%;">
                        <div class="how-it-works-inner">
                            <div>
                                <h2 class="my-5 section-title">How it works</h2>

                                <ul class="">
                                    <li>Select location & Destination and dates</li>
                                    <li>Provide required details</li>
                                    <li>Book & make payment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="problem-then-contact-us">
            <div class="container py-4 text-white problem-then-contact-us-inner">
                <h4>Having Any Problem Booking? Let Us Know ! ! !</h4>
                <a href="./user/contact-us.php" class="btn custom-form-btn btn-lg">CONTACT US</a>
            </div>
        </section>

    </main>


    <footer class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <ul>
                        <li>
                            <a class="navbar-brand" href="#">
                                <h2>Brand</h2>
                            </a>
                        </li>
                        <li>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio blanditiis soluta eligendi iure sunt pariatur accusamus veniam, unde non est?
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <ul>
                        <li>
                            <h6 class="footer-column-title">QUICK LINKS</h6>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">About us</a>
                        </li>
                        <li>
                            <a href="./user/faq.php" class="footer-links">FAQ</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Privacy policy</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Terms and condition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <ul>
                        <li>
                            <h6 class="footer-column-title">CONTACT</h6>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Address 1</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Address 2</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Phn number</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Email</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Email</a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 offset-md-8">
                    <ul>
                        <li class="footer-column-title">SOCIAL MEDIA</li>
                        <li>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f social-icon"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram social-icon"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter social-icon"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr style="border-top: 1px solid #fff">
        <div class="container p-0">Copyright &copy; 2020</div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./js/app.js"></script>
</body>

</html>