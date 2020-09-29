<!DOCTYPE html>
<html class="no-js" lang="fr">
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

    <body class="homepage-3">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                
                                @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clonage.home') }}">Cloning</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                @endauth

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- ***** Header End ***** -->

            @yield('contents')

            <!--====== Footer Area Start ======-->
            <footer class="footer-area">                
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!-- Copyright Area -->
                                <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                    <!-- Copyright Left -->
                                    <div class="copyright-left">&copy; Copyrights 2020 Cloner.xyz All rights reserved.</div>
                                    <!-- Copyright Right -->
                                    <div class="copyright-right">Made with <font style="color: #f93822;"><i class="fas fa-heart"></i></font> By <a href="https://twitter.com/NiroxyOff">Niroxy</a> & <a href="https://www.youtube.com/c/HideakiAtsuyo?sub_confirmation=1">Hideaki</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--====== Footer Area End ======-->
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

        <script>
            $(document).ready(function() {
                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 500;
                toastr.options.closeEasing = 'swing';
                @if(session('success'))
                    toastr.success("{{ session('success') }}", "Succès !")
                @endif

                @if(session('error'))
                    toastr.error("{{ session('error') }}", "Erreur !")
                @endif
            });
        </script>

        @yield('footer-scripts')

    </body>
</html>
