<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4">
        <div class="ui-bg-overlay bg-light opacity-75"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->

                    <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>

                    <!-- Form -->
                    <form action="login" method="POST">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" required />
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label d-flex justify-content-between align-items-end">
                                <span>Password</span>
                            </label>
                            <input type="password" name="password" placeholder="Password" class="form-control" required />
                            <div class="clearfix"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </div>
                    </form>
                    <!-- [ Form ] End -->

                </div>
                <div class="card-footer py-3 px-4 px-sm-5">
                    <div class="text-center text-muted">
                        Don't have an account yet?
                        <a href="pages_authentication_register-v2.html">Sign Up</a>
                    </div>
                </div>
            </div>

        </div>
    </div>