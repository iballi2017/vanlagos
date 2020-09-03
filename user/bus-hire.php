<?php
include_once '../includes/header.php'; ?>


<main class="bus-hire-page mb-5">
    <div class="bg-white m-0 p-3 page-info-banner">
        <div class="container">
            <p><span>You selected Van hire within
                    Lagos</span>&nbsp;&nbsp;<span>(Kindly help know the time and date you want to hire)</span></p>
        </div>
    </div>

    <div class="container">
        <!--  -->
        <section class="bus-hire-booking-form mt-5 userHireForm">
            <!-- <div class="card-body bg-white"> -->
            <div class="form-wrapper card-body p-0">
                <div class="bg-white py-4">
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
                                            <label for="pickupDate"
                                                class="m-0 pick-up-label fontawesome-pseudo">Pick-up</label>
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
                                            <label for="dropOffDate"
                                                class="m-0 pick-up-label fontawesome-pseudo">Drop-off</label>
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
                </div>
            </div>
            <!-- </div> -->
        </section>
    </div>

</main>

<?php include_once '../includes/footer.php';

?>