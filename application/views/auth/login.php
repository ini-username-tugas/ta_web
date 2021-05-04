<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>assets/img/web-logo.ico" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Outer Row -->
    <div class="row justify-content-center mx-auto bg-dark">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 bg-grey">

                    <!-- nested row within card body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block image-grid-container">
                            <img src="<?= base_url('assets/'); ?>assets/img/side-image.png">
                        </div>
                        <div class="col-lg-6 mt-5 mx-auto my-auto">
                            <div class="text-center">
                                <h2 class="text-center">Welcome back! I guess...</h2>
                                <h6 class="text-center mb-4">Please input your account informations.</h6>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user justify-items-center" method="post" action="<?= base_url('auth/login'); ?>">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" styles="background-color: #72A4D2" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/registration'); ?>">Don't have an account? Register!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Back to Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>

</body>

</html>