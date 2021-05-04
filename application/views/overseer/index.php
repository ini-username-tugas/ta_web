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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#user">User</a></li>
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
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-ship fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-plane-departure fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- User -->
    <section class="page-section" id="user">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">User</h2>
                <h3 class="section-subheading text-muted">Set their permissions, or delete their account here.</h3>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Nama User</td>
                                <td>Email User</td>
                                <td>
                                    <a href="" class="badge badge-warning">Detail</a>
                                    <a href="" class="badge badge-success">Ubah</a>
                                    <a href="" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
                <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
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