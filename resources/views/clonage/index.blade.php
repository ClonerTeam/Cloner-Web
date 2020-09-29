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


<body class="inner">
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

        <!-- ***** Clonage Area Start ***** -->
        @if(Auth::user()->email_verified_at != NULL)
        <section id="clonage" class="section welcome-area bg-overlay subscribe-area h-100vh ptb_100">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="subscribe-content text-center">
                            <h1 id="etapeId" class="text-white my-4">Step 1</h1>
                            <!-- Subscribe Form -->
                            <div id="form" class="subscribe-form">
                                <div id="form-group" class="form-group">
                                    <input type="text" class="form-control" id="invite_url" name="invite_url" placeholder="Invitation of the guild to clone (Ex : https://discord.gg/CrP9HEC)">
                                </div>
                                <div id="submit-button">
                                    <button id="submit" type="submit" class="btn btn-lg btn-block stepOne">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
          <section class="section welcome-area bg-overlay subscribe-area h-100vh ptb_100">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="subscribe-content text-center">
                            <h1 class="text-white my-4">Your email address has not been verified !</h1>
                            <!-- Subscribe Form -->
                              <form method="POST" action="{{ route('verification.email.resend') }}" class="subscribe-form">
                                @csrf
                                <button type="submit" class="btn btn-lg btn-block">Resend an email !</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- ***** Clonage Area End ***** -->
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

      <script>
          $(document).ready(function() {
              toastr.options.closeButton = true;
              toastr.options.closeMethod = 'fadeOut';
              toastr.options.closeDuration = 500;
              toastr.options.closeEasing = 'swing';
              @if(session('success'))
                  toastr.success("{{ session('success') }}", "Success !")
              @endif

              @if(session('error'))
                  toastr.error("{{ session('error') }}", "Error !")
              @endif
          });

          function copyToClipboard(text) {
            var input = document.body.appendChild(document.createElement("input"));
            input.value = text;
            input.focus();
            input.select();
            document.execCommand('copy');
            input.parentNode.removeChild(input);
            toastr['success']('The text has been copied !');
          }

          @if(Auth::user()->email_verified_at != NULL)

          function disable() {
            $('#invite_url').prop("disabled", true);
            $('#submit').prop("disabled", true);
          }

          function enable() {
            $('#invite_url').prop("disabled", false);
            $('#submit').prop("disabled", false);
          }

          $(document).ready(function() {

            disable();

            var options = {
              remote: "{{ $server->ip }}",
              token_id: "{{ Auth::user()->token_id }}",
              token_key: "{{ Auth::user()->token_key }}"
            }

            var socket = io.connect(options.remote, { secure: true, reconnection: true, reconnectionDelay: 1000, reconnectionDelayMax: 2000 });

            toastr.options={closeButton:true,debug:false,newestOnTop:true,progressBar:false,positionClass:"toast-top-right",preventDuplicates:true,showDuration:"0",hideDuration:"0",timeOut:"0",extendedTimeOut:"0",showEasing:"swing",hideEasing:"linear",showMethod:"fadeIn",hideMethod:"fadeOut",tapToDismiss:false};

            socket.on('connect', function() {
              toastr.clear();
              socket.emit('auth', options.token_id, options.token_key);
            })

            socket.on('connect_error', function() {
              toastr["error"]('There was an error connecting to one of our servers. If the problem persists contact an administrator.', "Error");
            })

            socket.on('auth', (data) => {
              if(data != "success") {
                toastr["error"]('There was an error connecting to one of our servers. If the problem persists contact an administrator.', "Error");
              } else {
                enable();
              }
            });

            socket.on('newError', (msg) => {
                disable();
                toastr["error"](msg);

                setTimeout(function() {
                    document.location.reload(true);
                }, 5000);
            });

            socket.on('stepTwo', function(data) {
                $('#etapeId').html("Step 2");

                $('#form-group').html(`
                <div class="subscribe-form d-flex align-items-center mx-auto">
                    <input disabled type="text" id="cmd" class="form-control" value="c?backup load ${data.dataUUID}">
                    <button onclick="copyToClipboard('c?backup load ${data.dataUUID}');" class="btn btn-bordered">Copy</button>
                </div>`);

                $('#submit-button').html(`<a onclick="addBot();"><button id="submit" type="button" class="btn btn-lg btn-block stepTwo">Add the bot to an empty server</button></a>`);
            });

            $('#submit').on('click', function() {
                if($('#submit').hasClass('stepOne')) {
                    socket.emit('stepOne', $("#invite_url").val());
                    disable();
                }
            });
          });

            function addBot() {
                window.open("https://discordapp.com/oauth2/authorize?client_id=746287354003718146&scope=bot&permissions=8", null, "width=470, height=650")
            }

          @endif

      </script>

      @yield('footer-scripts')

  </body>
</html>