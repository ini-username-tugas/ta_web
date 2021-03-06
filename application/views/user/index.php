<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TPPrakerin TA</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>assets/img/web-logo.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/'); ?>assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#details">Details</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading mb-3">Welcome back!</div>
            <div class="masthead-subheading">It's Nice To See You Again.</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Go to Dashboard</a>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Land Logistics</h4>
                    <p class="text-muted">We take care of your stuff. From one point to another, using land vehicle. Slow, but reliable. It's that simple.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-ship fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Sea Logistics</h4>
                    <p class="text-muted">Open sea logistics? No problem. We'll go trough waves, storms, even hydras, just to deliver your package safely to their destination.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-plane-departure fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Air Logistics</h4>
                    <p class="text-muted">We take your stuff, put it safely on a plane, and flew away to their destination. Fast, simple, and efficient.</p>
                </div>
            </div>
    </section>

    <!-- About-->
    <section class="page-section" id="details">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Details</h2>
                <h3 class="section-subheading text-muted">Find more info about our logistics here.</h3>
            </div>
            <div class="row">
                <div class="card mb-3 mx-auto">
                    <img src="<?= base_url('assets/'); ?>assets/img/about/truck.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Land Logistics</h5>
                        <p class="card-text">We will weigh down your package, before wrapping it so that your package will be safe while traveling with us. We make sure that nothing will break, before we send your package to it's destination. Then, on the road, we make sure our driver is driving with care and safety, so that your package won't ended up breaking mid-travel.</p>
                        <a href="#" class="btn btn-primary">Order our land logistics service</a>
                    </div>
                </div>
                <div class="card mb-3 mx-auto">
                    <img src="<?= base_url('assets/'); ?>assets/img/about/ship.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sea Logistics</h5>
                        <p class="card-text">We bring your package to the dock, where the package then gets loaded into a container ship. We labeled each one of your package with special marking, so your package won't be lost so easily. The ship's captain then will bring your package to it's destination safely, without any accident.</p>
                        <a href="#" class="btn btn-primary">Order our sea logistics service</a>
                    </div>
                </div>
                <div class="card mb-3 mx-auto">
                    <img src="<?= base_url('assets/'); ?>assets/img/about/airplane.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Air Logistics</h5>
                        <p class="card-text">We bring your package to the airport, load it into a plane, then flew it to it's destination. Fast, Simple, and Efficient.</p>
                        <a href="#" class="btn btn-primary">Order our air logistics service</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Team</h2>
                <h3 class="section-subheading text-muted">Hello! Here you can find one stupid idiotic dumbfuck, with two innocent animal whose photos i've stolen.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>assets/img/team/panda.jpg" alt="" />
                        <h4>Mas Panda</h4>
                        <p class="text-muted">Lead Marketing</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/watch?app=desktop&v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="http://www.blankwebsite.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>assets/img/team/radit.jpg" alt="" />
                        <h4>Radithya</h4>
                        <p class="text-muted">Yang Bikin Website</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/SnapClusty" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.reddit.com/user/SnapClusty" target="_blank"><i class="fab fa-reddit-alien"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>assets/img/team/rakun.jpg" alt="" />
                        <h4>Mas Rakun</h4>
                        <p class="text-muted">Lead Marketing</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://theuselessweb.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/watch?app=desktop&v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/" target=" _blank""><i class=" fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright ?? Your Website 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2 js-scroll-trigger" href="#services"><i class="fas fa-chevron-up"></i></a>
                    <p class="mt-1">Back to top</p>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>

</body>

</html>