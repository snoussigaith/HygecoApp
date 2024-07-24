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
    
 <div data-v-2e87ca52="" class="container-fluid p-5 d-flex justify-content-center align-items-center"
    style="background-color: rgb(48, 199, 181);">
    <div data-v-2e87ca52="" class="row justify-content-center">
        <div data-v-2e87ca52="" class="col-sm-6 form-section shadow-border booking-panel card">

            <h2>Make a Reservation</h2>

            <form id="booking-form" action="{{ route('reservation.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="service">Service</label>
                    <select name="service_id" id="service" class="form-control" onchange="loadOptions(this.value)">
                        @foreach($services as $service)
                        <option value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <fieldset data-v-2e87ca52="" id="base" style="display:none;">
                    <div data-v-2e87ca52="" class="text-start">
                        <h3 data-v-2e87ca52=""
                            style="font-weight: 100; font-size: 19px; font-family: proxima, arial; color: rgb(55, 62, 74); line-height: 1.1;">
                            Description </h3>
                    </div>
                    <div data-v-2e87ca52="" class="row" id="option-group" name="extra_options">
                        <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                            <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                                <div data-v-2e87ca52="" class="extra-icon" style=" background-color: #30c7b5;"><img
                                        data-v-2e87ca52="" src="../assets/img/option.png">
                                </div>
                                <div data-v-2e87ca52="" class="extra-text">Aspiration</div>
                            </div>
                        </tui-booking-service-extra>
                        <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                            <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                                <div data-v-2e87ca52="" class="extra-icon" style=" background-color: #30c7b5;"><img
                                        data-v-2e87ca52="" src="../assets/img/option.png">
                                </div>
                                <div data-v-2e87ca52="" class="extra-text">Dépoussiérage</div>
                            </div>
                        </tui-booking-service-extra>
                        <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                            <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                                <div data-v-2e87ca52="" class="extra-icon" style=" background-color: #30c7b5;"><img
                                        data-v-2e87ca52="" src="../assets/img/option.png">
                                </div>
                                <div data-v-2e87ca52="" class="extra-text">Nettoyage des soles</div>
                            </div>
                        </tui-booking-service-extra>
                        <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                            <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                                <div data-v-2e87ca52="" class="extra-icon" style=" background-color: #30c7b5;"><img
                                        data-v-2e87ca52="" src="../assets/img/option.png">
                                </div>
                                <div data-v-2e87ca52="" class="extra-text">Désinfection des Salles des bain</div>
                            </div>
                        </tui-booking-service-extra>


                    </div>
                </fieldset>
                <!-- Frequency selection, initially hidden -->
                <div class="form-group" id="frequency-group" style="display: none;">
                    <label for="frequency">Frequency</label>
                    <select name="frequency" id="frequency" class="form-control">
                        <option value="monthly">Monthly</option>
                        <option value="weekly">Weekly</option>
                        <option value="biweekly">Biweekly</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Chambres</label>
                    <select name="chambre_count" id="chambre_count" class="form-control" onchange="updateTotalPrice()">
                        @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}" {{ $i==1 ? 'selected' : '' }}>{{ $i }}
                            </option>
                            @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label>Salle de Bain</label>
                    <select name="bain_count" id="bain_count" class="form-control" onchange="updateTotalPrice()">
                        @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}" {{ $i==1 ? 'selected' : '' }}>{{ $i }}
                            </option>
                            @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label>Cuisine</label>
                    <select name="cuisine_count" id="cuisine_count" class="form-control" onchange="updateTotalPrice()">
                        @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}" {{ $i==1 ? 'selected' : '' }}>{{ $i }}
                            </option>
                            @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label>Options</label>
                    <div id="options-container" class="row">
                        @foreach($options as $option)
                        <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                            <div data-v-2e87ca52="" class="extra-option">
                                <div data-v-2e87ca52="" class="extra-icon" id="extra-{{ $option->id }}">
                                    <img onclick="toggleOption({{ $option->id }}, {{ $option->price }})"
                                        data-v-2e87ca52="" src="../assets/img/option.png">
                                </div>
                                <div class="extra-text">{{ $option->name }}</div>
                            </div>
                        </tui-booking-service-extra>
                        @endforeach
                    </div>
                </div>

                <div class="form-group" id="carpet-group">
                    <label for="carpet_count">Nombre de Tapis</label>
                    <input type="number" class="form-control" id="carpet_count" name="carpet_count" min="0" value="0">
                </div>

                <div class="form-group" id="etats-group">
                    <label for="etat">Etats</label>
                    <select class="form-control" id="etat" name="etat">
                        <option value="leger" id="leger">Légèrement sale</option>
                        <option value="assez" id="assez">Assez sale</option>
                        <option value="tres" id="tres">Très sale</option>
                    </select>
                </div>

               
                <div data-v-2e87ca52="" class="container">
                        <div data-v-2e87ca52="" class="row">
                            <div data-v-2e87ca52="" class="col-lg-12">
                                <div data-v-2e87ca52="" class="panel panel-default">
                                    <div data-v-2e87ca52="" class="panel-heading">
                                        <h3 data-v-2e87ca52="" class="panel-title"
                                            style="font-weight: 100; font-size: 19px; font-family: proxima, arial; color: rgb(55, 62, 74); line-height: 1.1;">
                                            QUI ÊTES-VOUS</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Ces informations seront utilisées pour vous contacter concernant votre
                                            service.</p>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="name"
                                                        placeholder="First Name*" type="text"></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="last_name"
                                                        placeholder="Last Name*" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="email"
                                                        placeholder="Email*" type="email"></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="phone"
                                                        placeholder="Phone*" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class="container" data-v-2e87ca52="">
                        <div class="row" data-v-2e87ca52="">
                            <div class="col-lg-12" data-v-2e87ca52="">
                                <div class="panel panel-default" data-v-2e87ca52="">
                                    <div class="panel-heading" data-v-2e87ca52="">
                                        <h3 class="panel-title"
                                            style="font-weight:100;font-size:19px;font-family:proxima, arial;color:rgb(55, 62, 74);line-height:1.1;"
                                            data-v-2e87ca52="">ADRESSE</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Où aimeriez-vous que nous nettoyions ?</p>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="address"
                                                        placeholder="Adresse*" type="text"></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="apt_suite"
                                                        placeholder="Apt/Suite #" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="city"
                                                        placeholder="Ville*" type="text" data-v-2e87ca52=""></div>
                                            </div>
                                          
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control " name="zip"
                                                        placeholder="Code Postal*" type="text"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Submit Reservation</button>
        </div>
        <div data-v-2e87ca52="" class="col-sm-2 card" style="margin-left: 20px;">
            <div class="form-group">
                <label>Total Price: </label>
                <span id="total-price">0</span> $
            </div>

        </div>
        </form>
    </div>
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

  

<script>
   const allOptions = @json($options);
let selectedOptions = new Set();

function loadOptions(serviceId) {
    const service = @json($services).find(service => service.id == serviceId);
    const optionsContainer = document.getElementById('options-container');
    const frequencyGroup = document.getElementById('frequency-group');
    const baseGroup = document.getElementById('base');

    if (service.name === 'menage regulier') {
        frequencyGroup.style.display = 'block';
        baseGroup.style.display = 'block';
    } else {
        frequencyGroup.style.display = 'none';
        baseGroup.style.display = 'none';
    }

    // Clear existing options
    optionsContainer.innerHTML = '';

    if (service) {
        const serviceOptions = JSON.parse(service.options);

        allOptions.forEach(option => {
            const isSelected = serviceOptions.some(serviceOption => serviceOption.id == option.id);
            const extraOption = `
                <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                    <div class="extra-option" data-v-2e87ca52="">
                        <div data-v-2e87ca52="" class="extra-icon" id="extra-${option.id}" ${isSelected ? 'style="background-color: green;"' : ''}>
                            <img data-v-2e87ca52="" onclick="toggleOption(${option.id}, ${option.price})" src="../assets/img/option.png">
                        </div>
                        <div class="extra-text">${option.name}</div>
                    </div>
                </tui-booking-service-extra>`;
            optionsContainer.insertAdjacentHTML('beforeend', extraOption);

            // Update selectedOptions if the option is pre-selected
            if (isSelected) {
                selectedOptions.add(option.id);
            }
        });

        // Add event listeners to newly created elements
        allOptions.forEach(option => {
            const optionElement = document.getElementById(`extra-${option.id}`);
            if (optionElement) {
                optionElement.addEventListener('click', () => {
                    toggleOption(option.id, option.price);
                });
            }
        });

        updateTotalPrice();
    }
}

function toggleOption(optionId, optionPrice) {
    const optionElement = document.getElementById(`extra-${optionId}`);
    if (selectedOptions.has(optionId)) {
        selectedOptions.delete(optionId);
        optionElement.style.backgroundColor = '';
    } else {
        selectedOptions.add(optionId);
        optionElement.style.backgroundColor = 'green';
    }
    console.log('Selected Options:', Array.from(selectedOptions));
    updateTotalPrice();
}

function updateTotalPrice() {
    const serviceSelect = document.getElementById('service');
    const selectedServicePrice = parseFloat(serviceSelect.options[serviceSelect.selectedIndex].dataset.price || 0);
    const selectedServiceName = serviceSelect.options[serviceSelect.selectedIndex].text;

    const chambreCount = parseInt(document.getElementById('chambre_count').value) || 0;
    const bainCount = parseInt(document.getElementById('bain_count').value) || 0;
    const cuisineCount = parseInt(document.getElementById('cuisine_count').value) || 0;
    const carpetCount = parseInt(document.getElementById('carpet_count').value) || 0;

    const chambrePrice = 15;   // Price per chambre
    const bainPrice = 30;      // Price per salle de bain
    const cuisinePrice = 40;   // Price per cuisine
    const carpetPrice = 40;    // Price per carpet

    let chambreCost = chambreCount > 1 ? (chambreCount - 1) * chambrePrice : 0;
    let bainCost = bainCount > 1 ? (bainCount - 1) * bainPrice : 0;
    let cuisineCost = cuisineCount > 1 ? (cuisineCount - 1) * cuisinePrice : 0;
    let carpetCost = carpetCount * carpetPrice;

    let totalPrice = selectedServicePrice + chambreCost + bainCost + cuisineCost + carpetCost;

    selectedOptions.forEach(optionId => {
        const option = allOptions.find(option => option.id == optionId);
        if (option) {
            totalPrice += parseFloat(option.price);
        }
    });

    // Get the selected etat
    const etatSelect = document.getElementById('etat');
    const selectedEtat = etatSelect.value;

    if (selectedEtat === 'leger') {
        totalPrice += 0;
    } else if (selectedEtat === 'assez') {
        totalPrice += 60;
    } else if (selectedEtat === 'tres') {
        totalPrice += 90;
    }

    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
    console.log(`Selected Service: ${selectedServiceName}`);
    console.log(`Selected Options: ${Array.from(selectedOptions)}`);
    console.log(`Total Price: ${totalPrice.toFixed(2)}`);
    console.log(`Chambre Count: ${chambreCount}`);
    console.log(`Salle de Bain Count: ${bainCount}`);
    console.log(`Cuisine Count: ${cuisineCount}`);
    console.log(`Carpet Count: ${carpetCount}`);
    console.log(`Etat: ${selectedEtat}`);
}

// Event listeners
document.getElementById('service').addEventListener('change', function () {
    const serviceId = this.value;
    loadOptions(serviceId);
});

document.getElementById('carpet_count').addEventListener('input', updateTotalPrice);
document.getElementById('etat').addEventListener('change', updateTotalPrice);

// Initial load
document.addEventListener('DOMContentLoaded', function () {
    const initialServiceId = document.getElementById('service').value;
    if (initialServiceId) {
        loadOptions(initialServiceId);
    }
});

document.getElementById('booking-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    const serviceId = parseInt(formData.get('service_id'));
    const chambreCount = parseInt(formData.get('chambre_count'));
    const bainCount = parseInt(formData.get('bain_count'));
    const cuisineCount = parseInt(formData.get('cuisine_count'));
    const carpetCount = parseInt(formData.get('carpet_count'));
    const selectedOptionsArray = Array.from(selectedOptions).map((optionId) => {
        const option = allOptions.find((option) => option.id === optionId);
        return option.name;
    });
    const clientName = formData.get('name');
    const clientEmail = formData.get('email');
    const clientLastName = formData.get('last_name');
    const clientPhone = formData.get('phone');
    const clientAddress = formData.get('address');
    const clientApt = formData.get('apt_suite');
    const clientCity = formData.get('city');
    const clientZip = formData.get('zip');
    const serviceSelect = document.getElementById('service');
    const selectedServiceName = serviceSelect.options[serviceSelect.selectedIndex].text;
    const totalPrice = parseFloat(document.getElementById('total-price').textContent);

    // Get the selected frequency and etat
    const frequencySelect = document.getElementById('frequency');
    const selectedFrequency = frequencySelect ? frequencySelect.value : null;
    const etatSelect = document.getElementById('etat');
    const selectedEtat = etatSelect.value;

    try {
        const response = await fetch('{{ route('reservation.store') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                service_id: serviceId,
                service_name: selectedServiceName,
                chambre_count: chambreCount,
                bain_count: bainCount,
                cuisine_count: cuisineCount,
                carpet_count: carpetCount,
                selected_options: selectedOptionsArray,
                total_price: totalPrice,
                name: clientName,
                email: clientEmail,
                last_name: clientLastName,
                phone: clientPhone,
                address: clientAddress,
                apt_suite: clientApt,
                city: clientCity,
                zip: clientZip,
                frequency: selectedFrequency,
                etat: selectedEtat,
            }),
        });

        if (response.ok) {
            const data = await response.json();
            // Handle successful response, e.g., show a success message or redirect
            console.log(data);
        } else {
            const errorData = await response.json();
            console.error('Error:', errorData.error);
        }
    } catch (error) {
        console.error('Fetch error:', error);
    }
});

</script>






    </body>

    </html>