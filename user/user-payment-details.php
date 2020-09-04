<?php
include_once '../includes/header.php'; ?>


<main class="user-payment-container mb-5">



    <section class="select-bus-page-header">
        <div class="container text-white py-2">
            <div class="clearfix">
                <span class="float-md-left">
                    <h5>Pick up location:&nbsp;<span>Lekki- Lagos</span></h5>
                    <p>
                        Pick up date and time:&nbsp;<span>12 October 2020, 10:am</span>
                    </p>
                </span>
                <span class="float-md-right">
                    <h5>Drop off location:&nbsp;<span>Lekki- Lagos</span></h5>
                    <p>
                        Pick up date and time:&nbsp;<span>12 October 2020, 10:am</span>
                    </p>
                </span>
            </div>




        </div>

        <div class="select-bus-condition-wrapper py-2">
            <div class="container">
                <p class="m-0 text-white">Price per hour is&nbsp;<span>₦</span><span>5000</span>&nbsp;Van Hire and Bus
                    Hire</p>
            </div>
        </div>

    </section>

    <section>
        <div class="container my-5">

            <form action="#">
                <div class="row my-2">
                    <div class="col-12 col-md-7 mb-4">
                        <div class="card">
                            <div class="card-header">
                                PERSONAL DETAILS
                            </div>
                            <div class="card-body">
                                <!-- form -->
                                <div class="row">
                                    <div class="col-12 col-md-9 mb-3">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" name="fullname" id="fullname">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="gender" class="d-block">Gender</label>
                                        <div class="select_drop_wrapper border fontawesome-pseudo py-1">
                                            <select class="border-0" name="state" id="state">
                                                <option value="default" selected>State</option>
                                                <option value="lagos">Lagos</option>
                                                <option value="lagos">Abuja</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="phone">Phone number</label>
                                        <input type="text" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input type="checkbox" class="rej_checkbox" name="agreeTerms" id="agreeTerms">
                                        <label for="agreeTerms" class="flex-label" id="agreeTermsLabel">
                                            <span class="customCheck fontawesome-pseudo"></span>
                                            I agree to the&nbsp;<a href="#" class="regular-link">terms & condition</a>
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card my-2 rounded-0 d-none" id="paymentOption">
                            <div class="card-header bg-white">
                                SELECT PAYMENT METHOD
                            </div>
                            <div class="card-body">
                                <div>
                                    <input type="radio" class="rej_radio" name="paymentMethod" id="bankTransfer">
                                    <label for="bankTransfer" class="d-flex" id="banktransferToggler">
                                        <span class="customRadio fontawesome-pseudo"></span>
                                        Bank Transfer
                                    </label>

                                    <div class="container d-none" id="seller_account_details">

                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <span class="mb-3">
                                                        <span class="font-weight-bold">Account
                                                            number:&nbsp;</span><span>1234569</span>
                                                    </span>
                                                    <span class="float-md-right d-block d-md-flex mb-3">
                                                        <span class="font-weight-bold">Bank
                                                            name:</span>&nbsp;<span>First Bank</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex mb-3">
                                                    <label class="font-weight-bold" for="amount">Amount:</label>&nbsp;
                                                    <span>
                                                        <input type="number" name="amount" id="amount">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" class="rej_radio" name="paymentMethod" id="gtPay">
                                    <label for="gtPay" class="d-flex">
                                        <span class="customRadio fontawesome-pseudo"></span>
                                        GT Pay
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div>
                            <div class="card rounded-top">
                                <div class="card-header">
                                    Summary
                                </div>
                                <div class="card-body py-2">
                                    <div class="font-weight-bold">Location : Within Lagos</div>
                                    <div>
                                        <span class="font-weight-bold">Price per hour</span>
                                        <span class="float-right font-weight-bolder">₦5000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body py-2">
                                    <div class="font-weight-bold">Pick up date and time:</div>
                                    <div>
                                        <span>12 October 2020, 10:am</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body py-2">
                                    <div class="font-weight-bold">Drop off date and time:</div>
                                    <div>
                                        <span>12 October 2020, 10:am</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body py-2">
                                    <div class="">
                                        <span class="font-weight-bold">Van</span>&nbsp;&nbsp;
                                        <span>Seat(s)</span>&nbsp;
                                        (<span>12</span>)
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="">
                                        <span class="font-weight-bold">Total to Pay</span>
                                        <span class="float-right font-weight-bolder">₦5000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- submit button -->
                <div class="row">
                    <div class="col-12 col-md-7">
                        <button type="button" class="py-2 px-5 custom-form-btn" onclick="goBack()">Back</button>
                        <button type="submit" class="py-2 px-5 grey-btn float-right" id="paymentContinueBtn" disabled>Continue</button>
                    </div>
                </div>
                <!--  -->
            </form>
        </div>
    </section>

</main>






<?php include_once '../includes/footer.php';

?>