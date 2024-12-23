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
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./stylesheet/css/style.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20">
    <!-- page loader -->
    <div id="loading">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg main-nav-bar sticky-top">

        <div class="container">
            <a class="navbar-brand" href="./">
                <h2>Brand Logo</h2>
            </a>
            <button class="navbar-toggler mobile-menu-icon border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-1x"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="d-block d-lg-none text-center my-4">
                    <a href="#" class="btn-custom-green-outline custom-nav-btn px-5 py-2 w-50">Sign In</a>
                    <a href="#" class="btn-custom-green-outline custom-nav-btn px-5 py-2">Sign Up</a>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-lg nav-call-toaction-btn px-4 nav-link custom-nav-link" href="./#pricingSection">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="./user/about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="./user/contact-us-alt.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="./user/booking-history.php"><i class="fas fa-user"></i> My Account</a>
                    </li>

                    <li class="nav-item d-none d-lg-block">
                        <a class="btn btn-custom-green-outline custom-nav-btn px-3 mx-md-2" href="./user/login.php">Sign
                            In</a>
                    </li>
                    <li class="nav-item mt-2 mt-md-0 d-none d-lg-block">
                        <a class="btn btn-custom-green-outline custom-nav-btn px-3 mx-md-2" href="./user/register.php">Sign
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
                        <h2 data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">We are always there at your service</h2>
                        <h1 data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">FAST and RELIABLE way to find QUALITY anywhere you need
                            it
                        </h1>
                    </div>
                </div>
            </div>


        </section>
        <!--  -->
        <section class="index-booking-form userHireForm mx-4" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
            <!-- <div class="card-body bg-white"> -->
            <div class="form-wrapper card-body p-0">
                <ul class="nav nav-pills row hero-main-nav-pills  m-0" id="pills-tab" role="tablist">
                    <li class="nav-item col-4 text-center p-0">
                        <a class="nav-link hero-tab-nav-links curve-left-top px-md-5 btn-md-lg" id="pills-hirevan-tab" data-toggle="pill" href="#pills-hirevan" role="tab" aria-controls="pills-hirevan" aria-selected="false">VAN
                            HIRE</a>
                    </li>
                    <!-- <li class="nav-item col-4 text-center p-0">
                        <a class="nav-link hero-tab-nav-links px-md-5 btn-md-lg" id="pills-hirebus-tab" data-toggle="pill" href="#pills-hirebus" role="tab" aria-controls="pills-hirebus" aria-selected="false">BUS
                            HIRE</a>
                    </li>
                    <li class="nav-item col-4 text-center p-0">
                        <a class="nav-link hero-tab-nav-links curve-right-top px-md-5 btn-md-lg" id="pills-car-tab" data-toggle="pill" href="#pills-car" role="tab" aria-controls="pills-car" aria-selected="false">CAR</a>
                    </li> -->
                    <li class="nav-item col-4 text-center p-0">
                        <a class="nav-link hero-tab-nav-links px-md-5 btn-md-lg active" id="pills-hirebus-tab" data-toggle="pill" href="#pills-hirebus" role="tab" aria-controls="pills-hirebus" aria-selected="true">BUS
                            HIRE</a>
                    </li>
                    <li class="nav-item col-4 text-center p-0">
                        <a class="nav-link hero-tab-nav-links curve-right-top px-md-5 btn-md-lg" id="pills-car-tab" data-toggle="pill" href="#pills-car" role="tab" aria-controls="pills-car" aria-selected="false">CAR</a>
                    </li>
                </ul>
                <div class="tab-content bg-white py-3" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-hirevan" role="tabpanel" aria-labelledby="pills-hirevan-tab">
                        <!-- VAN HIRE FORM OPENS -->
                        <div class="container">

                            <div>
                                <div class="flex-label">
                                    <div class="mr-2">
                                        <input type="radio" id="dailyRadio" name="hire_option" class="hire_option rej_radio" checked>
                                        <label for="dailyRadio" class="hire_option_label px-3 py-1 px-sm-5 py-sm-2" onclick="performSwitch()">
                                            Daily
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="hourlyRadio" name="hire_option" class="hire_option rej_radio">
                                        <label for="hourlyRadio" class="hire_option_label px-3 py-1 px-sm-5 py-sm-2" onclick="performSwitch()">
                                            Hourly
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ***** -->
                            <!-- Daily form -->
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form_grp">
                                            <label for="#" class="m-1">Pick-up</label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-7">
                                                    <div class="border rounded m-1">
                                                        <!-- <div class="row"> -->
                                                        <div class="col py-1 px-1">
                                                            <input type="text" class="border-0 w-100" placeholder="Input your address">
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="border rounded m-1">
                                                        <div class="row">
                                                            <div class="col py-1 px-3">
                                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                                    <select class="border-0" name="vanHire-pickup-state" id="vanHire-pickup-state">
                                                                        <option value="default" selected>State
                                                                        </option>
                                                                        <option value="lagos">Lagos</option>
                                                                        <option value="lagos">Abuja</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_grp">
                                            <div class="row no-gutters">
                                                <div class="col-7">
                                                    <div class="border rounded m-1">
                                                        <div class="col py-1 px-1">
                                                            <input type="date" class="border-0 w-100" placeholder="Input your address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="border rounded m-1">
                                                        <div class="row">
                                                            <div class="col py-1 px-3">
                                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                                    <select class="border-0" name="vanHire-pickup_time" id="vanHire-pickup_time">
                                                                        <option value="default" selected>Pick-up
                                                                            time
                                                                        </option>
                                                                        <option value="10am">10:00am</option>
                                                                        <option value="1pm">1:00pm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form_grp">
                                            <label for="#" class="m-1">Drop-off</label>
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-7">
                                                    <div class="border rounded m-1">
                                                        <div class="col py-1 px-1">
                                                            <input type="text" class="border-0 w-100" placeholder="Input your address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="border rounded m-1">
                                                        <div class="row">
                                                            <div class="col py-1 px-3">
                                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                                    <select class="border-0" name="vanHire-dropOff-state" id="vanHire-dropOff-state">
                                                                        <option value="default" selected>State
                                                                        </option>
                                                                        <option value="lagos">Lagos</option>
                                                                        <option value="lagos">Abuja</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_grp" id="switchOne">
                                            <div class="row no-gutters">
                                                <div class="col-5">
                                                    <div class="border rounded m-1">
                                                        <div class="row">
                                                            <div class="col py-1 px-3">
                                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                                    <select class="border-0" name="duration" id="duration">
                                                                        <option value="1_day" selected>1 day
                                                                        </option>
                                                                        <option value="2_days">2 days</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->

                                        <div class="form_grp d-none" id="switchTwo">
                                            <div class="row no-gutters">
                                                <div class="col-7">
                                                    <div class="border rounded m-1">
                                                        <div class="col py-1 px-1">
                                                            <input type="date" class="border-0 w-100" placeholder="Input your address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="border rounded m-1">
                                                        <div class="row">
                                                            <div class="col py-1 px-3">
                                                                <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                                    <select class="border-0" name="vahHire_pickup_time" id="vahHire_pickup_time">
                                                                        <option value="default" selected>Pick-up
                                                                            time
                                                                        </option>
                                                                        <option value="10am">10:00am</option>
                                                                        <option value="1pm">1:00pm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Link button -->
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn m-1 custom-form-btn">Continue
                                            Reservation</button>
                                    </div>
                                </div>
                            </form>
                            <!-- ***** -->
                        </div>
                        <!-- VAN HIRE FORM CLOSES -->
                    </div>
                    <div class="tab-pane fade show active" id="pills-hirebus" role="tabpanel" aria-labelledby="pills-hirebus-tab">

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
                                                    <select class="border-0" name="busHire-pickup-state" id="busHire-pickup-state">
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
                                                    <select class="border-0" name="busHire-dropOff-state" id="busHire-dropOff-state">
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
                                                    <select class="border-0" name="busHire-pickUpTime" id="busHire-pickUpTime">
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
                                                    <select class="border-0" name="busHire-dropOffTime" id="busHire-dropOffTime">
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
                    
                    <div class="tab-pane fade" id="pills-car" role="tabpanel" aria-labelledby="pills-car-tab">

                        <!-- CAR FORM OPENS -->
                        <h6 class="text-center">Bus hire form goes here!</h6>
                        <!-- CAR FORM CLOSES -->
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </section>


        <section class="why-choose-us my-5" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
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
                                <p><strong>On time</strong></p>
                            </li>
                            <li><img src="./images/air-condition.png" class="img img-fluid" alt="">
                                <p>
                                    <strong>Air Conditioned
                                        Buses</strong>
                                </p>
                            </li>
                            <li><img src="./images/comfort.png" class="img img-fluid" alt="">
                                <p><strong>Comfortable seats
                                        & leg space</strong></p>
                            </li>
                            <li><img src="./images/24-hours-support-svgrepo-com.png" class="img img-fluid" alt="">
                                <p><strong>24&nbsp;/&nbsp;7 Coustomer
                                        support</strong></p>
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
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card m-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                            <div class="watermark">
                                <p>Coming soon!</p>
                            </div>
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
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase grid-items-center">Hire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card m-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">

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
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase grid-items-center">Hire now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card m-2" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
                            <div class="watermark">
                                <p>Coming soon!</p>
                            </div>
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
                                <a href="#" class="btn btn-block custom-form-btn text-uppercase grid-items-center">Hire now</a>
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
                        <div class="how-it-works-inner" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">
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
                <h4 data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">Having Any Problem Booking? Let Us Know ! ! !</h4>
                <a href="./user/contact-us.php" class="btn custom-form-btn btn-lg" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">CONTACT US</a>
            </div>
        </section>

    </main>


    <footer class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <ul>
                        <li>
                            <a class="navbar-brand" href="#">
                                <h2>Brand</h2>
                            </a>
                        </li>
                        <li>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio blanditiis soluta
                                eligendi iure sunt pariatur accusamus veniam, unde non est?
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
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
                            <a href="#" class="footer-links">Privacy policy</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Terms and condition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
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
                            <a href="#" class="footer-links">+234 070 0000 0000</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Email</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Email</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
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

        <div class="text-center py-2 mt-2" style="border-top: 1px solid #fff">Copyright &copy; 2020 Vanlagos.</div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
    <script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="./js/app.jquery.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>