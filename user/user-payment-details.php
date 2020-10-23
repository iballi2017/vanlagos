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
                <p class="m-0 py-3 text-white">Customers should ensure that the receipts/invoice of items transported is
                    available and the Items being transported are not stolen or illegal and the customer will be held
                    responsible if found in breach of this agreement and in possession of any stolen property</p>
            </div>
        </div>

    </section>

    <section>
        <div class="container my-5">

            <form action="#">
                <div class="row my-2">
                    <!-- First column -->
                    <div class="col-12 col-md-7 mb-4">
                        <div class="row">
                            <div class="col-12">
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
                                                    <select class="border-0" name="gender" id="gender">
                                                        <option value="default" selected>Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
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
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mt-4">
                                    <div class="card-header">
                                        PACKAGE DETAILS
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <label for="desc">Description (kindly let us know the kind of
                                                    product)</label>
                                                <input type="text" name="desc" id="desc">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <label for="fragile">Fragile</label>
                                                <div>
                                                    <input type="radio" class="rej_radio" name="fragile"
                                                        id="fragile_yes">
                                                    <label for="fragile_yes" class="d-flex">
                                                        <span class="customRadio fontawesome-pseudo"></span>
                                                        Yes
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" class="rej_radio" name="fragile"
                                                        id="fragile_no">
                                                    <label for="fragile_no" class="d-flex">
                                                        <span class="customRadio fontawesome-pseudo"></span>
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="checkbox" class="rej_checkbox" name="special_fee"
                                                    id="special_fee">
                                                <label for="special_fee" class="flex-label" id="special_fee_label">
                                                    <span class="customCheck fontawesome-pseudo"></span>
                                                    Help in loading and offloading (fee of ₦2,000)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card border-0" style="background-color: unset">
                                    <div class="card-body">
                                        <input type="checkbox" class="rej_checkbox" name="agreeTerms" id="agreeTerms">
                                        <label for="agreeTerms" class="flex-label mb-0" id="agreeTermsLabel"
                                            onclick="checkTermsandCondition()">
                                            <span class="customCheck fontawesome-pseudo"></span>
                                            I agree to the&nbsp;<a href="#" class="regular-link">terms &
                                                condition</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">                                

                                <div class="card rounded-0 d-none" id="paymentOption">
                                    <div class="card-header bg-white">
                                        SELECT PAYMENT METHOD
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <input type="radio" class="rej_radio" name="paymentMethod"
                                                id="bankTransfer">
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
                                                            <label class="font-weight-bold"
                                                                for="amount">Amount:</label>&nbsp;
                                                            <span>
                                                                <input type="number" name="amount" id="amount">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
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
                        </div>
                    </div>

                    <!-- Second column -->
                    <div class="col-12 col-md-5">
                        <div class="payment-summary">
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
                        <button type="button" class="py-3 px-5 custom-form-btn payment-prev-btn" onclick="goBack()">Back</button>
                        <button type="submit" class="py-3 px-5 grey-btn float-right payment-next-btn" id="paymentContinueBtn"
                            disabled>Continue</button>
                    </div>
                </div>
                <!--  -->
            </form>
        </div>
    </section>

</main>






<?php include_once '../includes/footer.php';

?>