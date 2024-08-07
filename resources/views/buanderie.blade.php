<html lang="en">  
<head>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="icon" href="/favicon.png" />

    <title>Reservation Buanderie</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
    <link href="{{url('assets/css/service.css')}}" rel="stylesheet" />
 <style>
     .step {
            display: none;
        }

        .step.active {
            display: block;
        }

 </style>
</head>  
<body class="bg-gray-100">
    <noscript>
        <strong>We're sorry but vue-argon-dashboard-2-pro doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>

    <div id="app" class="g-sidenav-show" data-v-app="">
        <div class="landing-bg h-100 bg-gradient-primary position-fixed w-100" style="display: none;"></div>
        <main class="main-content position-relative max-height-vh-100 h-100">
            <div data-v-2e87ca52="" class="container-fluid" style="background-color: rgb(48, 199, 181); height: 41px;">
                <div data-v-2e87ca52="" class="text-center">
                    <h3 data-v-2e87ca52="" style="color: white;">50% OFF</h3>
                </div>
            </div>

            <!-- Navbar -->
            @include('navbar')

            <div data-v-2e87ca52="" class="page-header position-relative"
                style="background-image: url('../assets/img/200.png'); background-size: cover; padding: 100px;">
                <span class="mask opacity-8" style="background-color:#bfbfbf;" data-v-2e87ca52=""></span>
                <div class="container pb-10 pb-lg-9 pt-7 postion-relative z-index-2" data-v-2e87ca52="">
                    <div class="row" data-v-2e87ca52="">
                        <div class="mx-auto text-center col-md-6 mt-4" data-v-2e87ca52="">
                            <h3 class="text-center" style="color:#30c7b5;" data-v-2e87ca52="">Reservation </h3>
                            <p class="text-center" style="color:#30c7b5;" data-v-2e87ca52="">Hygeco is a Montreal-based company that offers a range of professional cleaning and laundry services</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi-step form -->
            <div class="container p-10">
                <form id="reservationForm">
                    <!-- Step 1 -->
                    <div class="step active">
                        <h4>Step 1: Quels types de produits aimeriez-vous faire nettoyer ?</h4>
                        <div class="form-group">
                            <label for="couette-double">Couette double ($17)</label>
                            <input type="number" class="form-control" id="couette-double" name="couette-double" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="couette-queen">Couette queen ($20)</label>
                            <input type="number" class="form-control" id="couette-queen" name="couette-queen" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="couette-king">Couette king ($23)</label>
                            <input type="number" class="form-control" id="couette-king" name="couette-king" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="oreiller">Oreiller ($20, $15 each for 3+)</label>
                            <input type="number" class="form-control" id="oreiller" name="oreiller" min="0" value="0">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="step">
                        <h4>Step 2: Enter your personal details and address</h4>
                         <div style="position: center">  
        			      <input class="form-control" type="text" id="datetime"/>  
    			         </div>  
   			             <div id="selected-datetime"></div>  
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="step">
                        <h4>Step 3: Choose your cleaning frequency</h4>
                        <div class="form-group">
                            <label for="frequency">Cleaning Frequency</label>
                            <select class="form-control" id="frequency" name="frequency">
                                <option value="none">None</option>
                                <option value="weekly">Weekly (10% off)</option>
                                <option value="biweekly">Biweekly (10% off)</option>
                                <option value="monthly">Monthly (10% off)</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 4 -->
                    <div class="step">
                        <h4>Step 4: Choose your delivery options</h4>
                        <div class="form-group">
                            <label for="delivery-distance">Delivery Distance (from 4260 Notre Dame, Ouest)</label>
                            <select class="form-control" id="delivery-distance" name="delivery-distance">
                                <option value="5">0-5 km ($10)</option>
                                <option value="10">5-10 km ($15)</option>
                                <option value="15">10-15 km ($20)</option>
                                <option value="20">15-20 km ($25)</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 5 -->
                    <div class="step">
                        <h4>Step 5: Review and Confirm Your Reservation</h4>
                        <p id="summary"></p>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Calculate Price</button>
                    </div>

                    <!-- Step 6 -->
                    <div class="step">
                        <h4>Step 6: Payment</h4>
                        <div class="form-group">
                            <label for="payment-method">Payment Method</label>
                            <select class="form-control" id="payment-method" name="payment-method">
                                <option value="stripe">Stripe</option>
                                <option value="globalpayments">Global Payments</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            @include('footer')
        </main>
    </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>    

<script>
    $(function () {
        $('#datetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm'
        });

        // Listen for changes to the datetimepicker
        $('#datetime').on('dp.change', function(e) {
            var selectedDateTime = e.date.format('YYYY-MM-DD HH:mm');
            $('#selected-datetime').text('Selected date and time: ' + selectedDateTime);
        });
    });
    let currentStep = 0;
        const steps = document.querySelectorAll(".step");

        function nextStep() {
            steps[currentStep].classList.remove("active");
            currentStep++;
            steps[currentStep].classList.add("active");
        }

        function prevStep() {
            steps[currentStep].classList.remove("active");
            currentStep--;
            steps[currentStep].classList.add("active");
        }

        function calculatePrice() {
            let totalPrice = 0;
            const couetteDouble = document.getElementById('couette-double').value * 17;
            const couetteQueen = document.getElementById('couette-queen').value * 20;
            const couetteKing = document.getElementById('couette-king').value * 23;
            const oreiller = document.getElementById('oreiller').value;
            const oreillerPrice = oreiller >= 3 ? oreiller * 15 : oreiller * 20;
            const deliveryDistance = document.getElementById('delivery-distance').value;
            const deliveryPrice = deliveryDistance * 5;
            const frequency = document.getElementById('frequency').value;
            const discount = frequency !== 'none' ? 0.9 : 1;
            
            totalPrice = (couetteDouble + couetteQueen + couetteKing + oreillerPrice + deliveryPrice) * discount;

            const summary = `
                <p>Couette Double: $${couetteDouble}</p>
                <p>Couette Queen: $${couetteQueen}</p>
                <p>Couette King: $${couetteKing}</p>
                <p>Oreiller: $${oreillerPrice}</p>
                <p>Delivery Price: $${deliveryPrice}</p>
                <p>Discount: ${frequency !== 'none' ? '10%' : '0%'}</p>
                <h4>Total Price: $${totalPrice.toFixed(2)}</h4>
            `;
            
            document.getElementById('summary').innerHTML = summary;
        }


    
</script>  
  
</body>  
</html>