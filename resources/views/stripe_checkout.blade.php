<html lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="icon" href="/favicon.png" />

    <title>Hygeco</title>
  <style data-fullcalendar=""></style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    crossorigin="anonymous"></script>
  <!-- <script defer="" src="/js/chunk-vendors.js"></script> -->
  <!-- <script defer="" src="/js/app.js"></script> -->
    <link href="{{url('assets/css/service.css')}}" rel=" stylesheet" />
    <style type="text/css">
      ul {
    list-style: none;
}

.example-2 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px;
    align-items: center;
}

.example-2 .icon-content {
    margin: 0 10px;
    position: relative;
}

.example-2 .icon-content .tooltip {
    position: absolute;
    top: -10px;
    left: -170px;
    transform: translateX(50%);
    color: #fff;
    padding: 6px 10px;
    border-radius: 15px;
    opacity: 0;
    visibility: hidden;
    font-size: 14px;
    transition: all 0.3s ease;
    width: 500px;
}
@media (max-width: 576px) {

    .example-2 .icon-content .tooltip {
        position: absolute;
    
    
    transform: translateX(50%);
    color: #fff;
    padding: 5px 10px;
    border-radius: 15px;
    opacity: 0;
    visibility: hidden;
    font-size: 14px;
    transition: all 0.3s ease;
    margin-top:3.5rem;
    margin-left:-7rem;
    width: 308px;
    
    }
}

.example-2 .icon-content:hover .tooltip {
    opacity: 1;
    visibility: visible;
    top: 6px;
}

.example-2 .icon-content a {
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 20%;
    color: #4d4d4d;
    background-color: #ffff;
    transition: all 0.3s ease-in-out;
}

.example-2 .icon-content a:hover {
    box-shadow: 3px 2px 45px 0px rgb(0 0 0 / 50%);
}

.example-2 .icon-content a svg {
    position: relative;
    z-index: 1;
    width: 30px;
    height: 30px;
}

.example-2 .icon-content a:hover {
    color: white;
}

.example-2 .icon-content a .filled {
    position: absolute;
    top: auto;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 0;
    background-color: #000;
    transition: all 0.3s ease-in-out;
}

.example-2 .icon-content a:hover .filled {
    height: 100%;
}

.example-2 .icon-content a[data-social="spotify"] .filled,
.example-2 .icon-content a[data-social="spotify"]~.tooltip {
    background-color: #bd081c;
}



      </style>
</head>

<body class="bg-gray-100">
  <noscript>
    <strong>We're sorry but vue-argon-dashboard-2-pro doesn't work properly without
      JavaScript enabled. Please enable it to continue.</strong>
  </noscript>

  <div id="app" class="g-sidenav-show" data-v-app="">
    <div class="landing-bg h-100 bg-gradient-primary position-fixed w-100" style="display: none"></div>
    <!--v-if-->
    <main class="main-content position-relative max-height-vh-100 h-100">
      <!--v-if-->
     <div data-v-b695219e="" class="container-fluid" style="background-color: rgb(48, 199, 181); height: 41px">
                <div data-v-b695219e="" class="text-center">
                    <p style="color: white" class="text-m">
                        Le site est actuellement en maintenance. Veuillez nous excuser
                        pour tout désagrément. Merci de nous contacter sur info@hygeco.ca
                        ou sur le +1 (514) 939 2020 pour toute demande ou question!
                    </p>
                </div>
            </div>
                              @include('navbar')

      <div class="page-header position-relative" style="
            background-image: url('../assets/img/100.png');
            background-size: cover;
            padding: 100px;
          ">
        <span class="mask bg-light opacity-4"></span>
        <div class="container pb-10 pb-lg-9 pt-7 postion-relative z-index-2">
          <div class="row">
            <div class=" col-md-6 mt-4">
              <h3 class="text-dark" style="font-size: 2.5rem; ">Services Résidentiels</h3>
            
            </div>
          </div>
         
        </div>
      </div>
     <div class="container">
    <h2>Confirm Reservation</h2>
    <p>Complete your payment to confirm your reservation:</p>

    <form id="payment-form">
        <div id="card-element"><!-- Stripe.js injects the Card Element --></div>
        <button id="submit">Pay {{ $totalPrice }}</button>
    </form>
</div>
               @include('footer')

    </main>
  </div>
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');

    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    var paymentForm = document.getElementById('payment-form');

    paymentForm.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: cardElement,
            }
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    // Redirect or show success message
                    window.location.href = "{{ route('reservations.success') }}";
                }
            }
        });
    });
</script>
</body>

</html>