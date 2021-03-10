<?php
include_once '../includes/header.php'; ?>


<main class="user-account-settings-container user-account-wrapper mt-5 mt-md-0 mb-5">
    <div class="container">
        <h3 class="my-3 d-none d-md-block">Welcome, <span class="user-name">Aderoye</span></h3>
        <div class="row">
            <div class="col-12 col-md-3 sidenav-container hide">
                <!-- user account sidenav -->
                <?php
                include_once '../includes/user-account-sidenav.php'; ?>
            </div>
            <div class="col-12 col-md-9 main-content">
                <button class="btn btn-default sidenav-toggler d-block d-md-none">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <div class="card border-0" style="background-color: #e5e5e5">
                    <div class="card-header bg-secondary">
                        <h3 class="text-display-lg my-0 text-white">Account settings</h3>
                    </div>
                    <!-- Edit profile -->
                    <div class="card-body border-bottom bg-white mb-2">
                        <div class="border-bottom py-2">
                            <h5>Edit profile</h5>
                        </div>

                        <div class="py-3">
                            <form action="#">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control grey_control" id="fullName" placeholder="Enter your name">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control grey_control" style="background-color: #E5E5E5">
                                            <option selected> Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control grey_control" id="phone" placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn custom-form-btn px-5">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Change password -->
                    <div class="card-body border-bottom bg-white mb-2">
                        <div class="border-bottom py-2">
                            <h5>Change password</h5>
                        </div>

                        <div class="py-3">
                            <form action="#">
                                <div class="form-row">

                                    <div class="form-group col-12 col-md-6">
                                        <label for="oldPassword">Old password</label>
                                        <input type="password" class="form-control grey_control" id="oldPassword" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="newPassword">New password</label>
                                        <input type="password" class="form-control grey_control" id="newPassword" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn custom-form-btn px-5">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include_once '../includes/footer.php';

?>