<?php
include_once '../includes/header.php'; ?>


<main class="user-account-container mb-5">
    <div class="container">
        <h1 class="my-3">Welcome, <span class="user-name">Aderoye</span></h1>
        <div class="row">
            <div class="col-12 col-md-3">
                <!-- user account sidenav -->
                <ul id="user-acct-sidenav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Book History</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Account Settings</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-9">
                <div class="d-flex align-items-center">
                    <button class="btn btn-sm mr-2">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                <h2 class="text-display-lg">Book History Details</h2>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="text-display-lg my-0">Personal details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">

                            <tbody>
                                <tr>
                                    <th scope="row">Full name</th>
                                    <td>ADEKUNLE Oluwagoke</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phonee</th>
                                    <td>0704455667888</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--  -->
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-display-lg my-0 text-white">Summary</h3>
                    </div>
                    <div class="card-body border-bottom">
                        <h5 class="m-0">VAN HIRE</h5>
                    </div>
                    <div class="card-body border-bottom">
                        <dl>
                            <dt>Pick up address and State:</dt>
                            <dd class="mb-0">15, Adekunle STR, Adelakun LGA, Osun</dd>
                        </dl>
                        <dl>
                            <dt>Drop off address and State:</dt>
                            <dd class="mb-0">7, Ayoshile STR, Fikayo LGA, Lagos</dd>
                        </dl>
                    </div>
                    <div class="card-body border-bottom">
                        <dl>
                            <dt>Pick up date and time:</dt>
                            <dd class="mb-0">12 October 2020, 10am</dd>
                        </dl>
                    </div>
                    <div class="card-body border-bottom">
                        <dl>
                            <dt>Number of hours:</dt>
                            <dd class="mb-0">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row">4 hours (Fixed price)</th>
                                            <td>₦&nbsp;<span>15,000</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <span>3</span>&nbsp;x&nbsp;₦&nbsp;<span>5,000</span>
                                            </th>
                                            <td>₦&nbsp;<span>15,000</span></td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">
                                                Total to pay
                                            </th>
                                            <td>
                                                ₦&nbsp;<span>30,000</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include_once '../includes/footer.php';

?>