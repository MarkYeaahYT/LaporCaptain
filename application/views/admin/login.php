<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login untuk Admin / Petugas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top"  style="background-image: url(/assets/img/home-cover.jpg);">
    <div class="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center" style="padding-top: 12%;">
                        <div class="col-6">
                            <img class="masthead-avatar mb-5" style="display: block; margin: auto;" src="/assets/img/logo-white.png" alt="" />
                            <div class="card">
                                <form  method="POST" action="<?php echo site_url('app/loginsecret_proses') ?>">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="username" name="username" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter Username">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section-->
    <!-- <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Your Website 2020</small></div>
    </div> -->
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="/assets/mail/jqBootstrapValidation.js"></script>
    <script src="/assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/login.js"></script>
</body>
</html>
