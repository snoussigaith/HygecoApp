<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="/favicon.png">

    <title>Hygeco</title>
    <style data-fullcalendar=""></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
         crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="{{url('assets/css/service.css')}}" rel=" stylesheet" />


    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <!-- <script defer="" src="/js/chunk-vendors.js"></script>
    <script defer="" src="/js/app.js"></script> -->
   

</head>

<body class="bg-gray-100">
    <noscript>
        <strong>We're sorry but vue-argon-dashboard-2-pro doesn't work
            properly without JavaScript enabled. Please enable it to
            continue.</strong>
    </noscript>

    <div id="app" class="g-sidenav-show" data-v-app="">
        <div class="landing-bg h-100 bg-gradient-primary position-fixed w-100" style="display: none;"></div><!--v-if-->
        <main class="main-content position-relative max-height-vh-100 h-100">
            <!--v-if--><!-- <div class="green-bar" style="background-color: #34C759; height: 5px;"></div> -->
            <div data-v-1f72e2ab="" class="container-fluid" style="background-color: rgb(48, 199, 181); height: 41px;">
                <div data-v-1f72e2ab="" class="text-center">
                    <p style="color: white;" class="text-m">Le site est actuellement en maintenance. Veuillez nous
                        excuser pour tout désagrément. Merci de nous contacter sur info@hygeco.ca ou sur le +1 (514) 939
                        2020 pour toute demande ou question!</p>
                </div>
            </div><!-- Navbar -->
                                      @include('navbar')

            <div data-v-1f72e2ab="" class="page-header position-relative"
                style="background-image: url(../assets/img/300.png ); background-size: cover; padding: 100px;">
                <!-- <span
                    class="mask bg-light opacity-4" data-v-1f72e2ab=""></span> -->
                <div class="container pb-10 pb-lg-9 pt-7 postion-relative z-index-2" data-v-1f72e2ab="">
                    <div class="row" data-v-1f72e2ab="">
                        <div class=" col-md-6 mt-4" data-v-1f72e2ab="">
                            <h3 class="text-dark" style="font-size:2.5rem;" data-v-1f72e2ab="">Contactez-Nous </h3>
                           
                        </div>
                    </div>
                    <div class="row" data-v-1f72e2ab="">
                        <div class="mx-auto text-center col-lg-4 col-md-6 col-7" data-v-1f72e2ab=""></div>
                    </div>
                </div>
            </div>

<div class="container-fluid p-5">
           @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
            @endif   
@include('contactForm')
    
</div>

            <div class="body">
                <div class="map-card">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11190.820533359596!2d-73.5859808!3d45.4757435!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9113aa4040b85%3A0xf5959d126a55199!2sHYGECO!5e0!3m2!1sen!2stn!4v1718663485322!5m2!1sen!2stn"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
           
          @include('footer')





        </main>
    </div>
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/670911472480f5b4f58bf49a/1i9tns6hi';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body>

</html>