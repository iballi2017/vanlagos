<?php
include_once '../includes/header.php'; ?>


<main class="booking-history-container mb-5">
    <div class="container">
        <h1 class="my-3">Welcome, <span class="user-name">Aderoye</span></h1>
        <div class="row">
            <div class="col-12 col-md-3">
                <!-- user account sidenav -->
                <div>
                    <ul id="user-acct-sidenav">
                        <li class="nav-item active">
                            <a href="#" class="nav-link"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Book History</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Account Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="card border-0" style="background-color: #e5e5e5">
                    <div class="card-header bg-secondary">
                        <h3 class="text-display-lg my-0 text-white">Book history</h3>
                    </div>
                    <!-- 1. -->
                    <div class="card-body border-bottom bg-white mb-2">
                        <table class="table table-borderless booking-history-table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" colspan="2">
                                        <a href="#" class="title">Bus Hire</a>
                                    </th>
                                    <!-- <th scope="col">Last</th> -->
                                    <th scope="col" class="text-light">8wks ago</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Number of hours :</td>
                                    <td>8hrs (Full day)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Total price :</td>
                                    <td><strong>₦&nbsp;<span>40,000</span></strong></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 2. -->
                    <div class="card-body border-bottom bg-white mb-2">
                        <table class="table table-borderless booking-history-table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" colspan="2">
                                        <a href="#" class="title">Van Hire</a>
                                    </th>
                                    <th scope="col" class="text-light">8wks ago</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Number of hours :</td>
                                    <td>8hrs (Full day)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Total price :</td>
                                    <td><strong>₦&nbsp;<span>35,000</span></strong></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include_once '../includes/footer.php';

?>