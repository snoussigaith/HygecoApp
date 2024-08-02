    <html lang="fr">

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="icon" href="/favicon.png" />

        <title>Hygeco</title>
        <style data-fullcalendar=""></style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            crossorigin="anonymous" />

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">


        <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add this line to include jQuery -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/web-component@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>

        <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>


        <link href="{{url('assets/css/service.css')}}" rel=" stylesheet" />
        <style>

        .extra-icon.selected {
            background-color: #30c7b5;
        }
        
    .cal-icon {
        position: relative;
        width: 100%
    }

    .cal-icon:after {
        color: #555;
        content: "\f073";
        display: block;
        font-family: "font awesome 5 free";
        font-weight: 600;
        font-size: 15px;
        margin: auto;
        position: absolute;
        right: 15px;
        top: 10px;
    }
        </style>
    </head>
    <body class="bg-gray-100">
    <noscript>
        <strong>We're sorry but vue-argon-dashboard-2-pro doesn't work
        properly without JavaScript enabled. Please enable it to
        continue.</strong>
    </noscript>

    <div id="app" class="g-sidenav-show" data-v-app="">
        <div class="landing-bg h-100 bg-gradient-primary position-fixed w-100" style="display: none;"></div><!--v-if-->
        <main class="main-content position-relative max-height-vh-100 h-100"><!--v-if-->
        <div data-v-2e87ca52="" class="container-fluid" style="background-color: rgb(48, 199, 181); height: 41px;">
            <div data-v-2e87ca52="" class="text-center">
            <h3 data-v-2e87ca52="" style="color: white;">50% OFF</h3>
            </div>
        </div><!-- Navbar -->
        @include('navbar')
        <div data-v-2e87ca52="" class="page-header position-relative"
            style="background-image: url('../assets/img/200.png'); background-size: cover; padding: 100px;"><span
            class="mask opacity-8" style="background-color:#bfbfbf;" data-v-2e87ca52=""></span>
            <div class="container pb-10 pb-lg-9 pt-7 postion-relative z-index-2" data-v-2e87ca52="">
            <div class="row" data-v-2e87ca52="">
                <div class="mx-auto text-center col-md-6 mt-4" data-v-2e87ca52="">
                <h3 class="text-center" style="color:#30c7b5;" data-v-2e87ca52="">Reservation </h3>
                <p class="text-center" style="color:#30c7b5;" data-v-2e87ca52=""> Hygeco is a Montreal-based company that
                    offers a range of professional cleaning and laundry services </p>
                </div>
            </div>
            </div>
        </div>
          <div class="container p-10">
        
            <div class="alert alert-success" role="alert">
                Reservation created successfully
            </div>
            <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>

        
    </div>

        @include('footer')
        </div>
        </main>
    </div>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>


    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>

  








    </body>

    </html>