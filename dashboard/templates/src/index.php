<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | AdZum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                    <a href="index.html" class="auth-brand mb-3">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="30" class="logo-dark">
                        <img src="assets/images/logo.png" alt="logo light" height="30" class="logo-light">
                    </a>

                    <h4 class="fw-semibold mb-2">Login your account</h4>

                    <p class="text-muted mb-4">Enter your email address and password to access your panel.</p>

                    <form action="index.html" class="text-start mb-3">
                        <div class="mb-3">
                            <label class="form-label" for="example-email">Email</label>
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Enter your email" name="email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="example-password">Password</label>
                            <input type="password" id="example-password" class="form-control" placeholder="Enter your password" name="password">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>

                            <a href="recover-password.php" class="text-muted border-bottom border-dashed">Forgot Password?</a>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit" name="login">Login</button>
                        </div>
                    </form>

                    <p class="text-danger fs-14 mb-4">Don't have an account? <a href="register.php" class="fw-semibold text-dark ms-1">Sign Up!</a></p>

                    

                    <p class="mt-auto mb-0">
                        <script>document.write(new Date().getFullYear())</script> © AdZum - By <a href="https://tejjzakaria.com" target="_blank"><span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">tejjzakaria</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>