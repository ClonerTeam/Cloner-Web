<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title  -->
        <title>Cloner.xyz</title>

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('img/favicon.png') }}">

        <!-- ***** All CSS Files ***** -->

        <!-- Style css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    </head>

    <body class="homepage-5 accounts">
        <!--====== Preloader Area Start ======-->
        <div class="preloader-main">
            <div class="preloader-wapper">
                <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                    <defs>
                        <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                        </filter>
                    </defs>
                    <g filter="url(#goo)">
                        <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                        <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                    </g>
                </svg>
                <div>
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                </div>
            </div>
        </div>

        <!--====== Scroll To Top Area Start ======-->
        <div id="scrollUp" title="Scroll To Top">
            <i class="fas fa-arrow-up"></i>
        </div>
        <!--====== Scroll To Top Area End ======-->

        <div class="main">
            <!-- ***** Header Start ***** -->
            <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
                <div class="container position-relative">
                    <a class="navbar-brand" href="/">
                        <img class="navbar-brand-regular" src="{{ asset('img/logo/logo-white.png') }}" width="50px" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="{{ asset('img/logo/logo.png') }}" width="50px" alt="sticky brand-logo">
                    </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-inner">
                        <!--  Mobile Menu Toggler -->
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <nav>
                            <ul class="navbar-nav" id="navbar-nav">
                                <ul class="navbar-nav" id="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                </ul>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Welcome Area Start ***** -->
            <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <!-- Welcome Intro Start -->
                        <div class="col-12 col-md-8 col-lg-5">
                            <!-- Contact Box -->
                            <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">

                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger text-center">{{ $error }}</div>
                                    @endforeach
                                @endif

                                <!-- Contact Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="contact-top">
                                        <h3 class="contact-title">Login</h3>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                                </div>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                                                </div>
                                            </div>
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" value="{{ old('remember') }}" id="remember" name="remember" type="checkbox">
                                                <label class="custom-control-label" for="remember">
                                                  <span class="text-muted">Remember me</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-bordered w-100 mt-3 mt-sm-4">Login</button>
                                        </div>
                                        <div class="col-12">
                                        <span class="d-block pt-2 mt-4 border-top">You don't have an account ? <a href="{{ route('register') }}">Sign up now</a></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shape Bottom -->
                <div class="shape-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                        <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                    </svg>
                </div>
            </section>
            <!-- ***** Welcome Area End ***** -->
        </div>


        <!-- ***** All jQuery Plugins ***** -->

        <!-- jQuery(necessary for all JavaScript plugins) -->
        <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}"></script>

        <!-- Bootstrap js -->
        <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

        <!-- Plugins js -->
        <script src="{{ asset('js/plugins/plugins.min.js') }}"></script>

        <!-- Active js -->
        <script src="{{ asset('js/active.js') }}"></script>

        <script src="https://www.google.com/recaptcha/api.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </body>
</html>