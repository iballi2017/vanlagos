<?php
include_once '../includes/header.php'; ?>


<main class="booking-history-container mb-5">
    <div class="container">
        <h1 class="my-3 d-none d-md-block">Welcome, <span class="user-name">Aderoye</span></h1>
        <div class="row">
            <div class="col-12 col-md-3 sidenav-container hide">
                <!-- user account sidenav -->
                <?php
                include_once '../includes/user-account-sidenav.php'; ?>
            </div>
            <div class="col-12 col-md-9 main-content">
                <button class="btn btn-default sidenav-toggler d-block d-md-none mt-3">
                    <i class="fas fa-arrow-left"></i>
                </button>
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
                                        <a href="./booking-details.php" class="title">Bus Hire</a>
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
                                        <a href="./booking-details.php" class="title">Van Hire</a>
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