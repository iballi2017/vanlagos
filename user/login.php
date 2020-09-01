<?php
include_once '../includes/header.php'; ?>


<main class="login-page mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h3 class="page-title">Login</h3>
        </div>
    </section>




    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                    <div class="card my-5">

                        <div class="card-body p-4 p-md-5">
                            <h4 class="text-center mb-4"><strong>Login to your account</strong></h4>
                            <form>


                                <div class="form-group mb-3">
                                    <input type="email" class="form-control grey_control" id="inputEmail"
                                        placeholder="Email / Phone number">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" class="form-control grey_control" id="inputPassword"
                                        placeholder="Password">
                                </div>

                                <!-- <div class="form-group"> -->
                                <button type="submit" class="btn custom-form-btn px-5 mb-3">Login</button>
                                <!-- </div> -->
                                <div class="">
                                    <small>
                                    Dont have account? Click <a href="#" class="regular-link">here</a> to
                                    register</small>
                                </div>
                                <div>
                                    <small><a href="#" class="regular-link"> Forgot password?</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php include_once '../includes/footer-script.php';

?>