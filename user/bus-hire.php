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
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form_grp">
                                    <label for="#" class="m-1">Pick-up</label>
                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-7">
                                            <div class="border rounded m-1">
                                                <!-- <div class="row"> -->
                                                <div class="col py-1 px-1">
                                                    <input type="text" class="border-0 w-100"
                                                        placeholder="Input your address">
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="border rounded m-1">
                                                <div class="row">
                                                    <div class="col py-1 px-3">
                                                        <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                            <select class="border-0" name="state" id="state">
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
                                                    <input type="date" class="border-0 w-100"
                                                        placeholder="Input your address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="border rounded m-1">
                                                <div class="row">
                                                    <div class="col py-1 px-3">
                                                        <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                            <select class="border-0" name="pickup_time"
                                                                id="pickup_time">
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
                                                    <input type="text" class="border-0 w-100"
                                                        placeholder="Input your address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="border rounded m-1">
                                                <div class="row">
                                                    <div class="col py-1 px-3">
                                                        <div class="select_drop_wrapper fontawesome-pseudo mx-1 py-1">
                                                            <select class="border-0" name="state" id="state">
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
                </div>
            </div>
            <!-- </div> -->
        </section>
    </div>

</main>

<?php include_once '../includes/footer.php';

?>