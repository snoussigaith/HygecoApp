<html lang="">

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
   
   <div class="container">
    @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <h2>Make a Reservation</h2>

    <form id="reservation-form" action="{{ route('reservation.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="service">Service</label>
            <select name="service_id" id="service" class="form-control" onchange="loadOptions(this.value)">
              
                @foreach($services as $service)
                    <option value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label>Chambres</label>
          <select name="chambre_count" id="chambre_count" class="form-control" onchange="updateTotalPrice()">
              @for ($i = 1; $i <= 6; $i++)
                  <option value="{{ $i }}" {{ $i == 1 ? 'selected' : '' }}>{{ $i }}</option>
              @endfor
          </select>
          </div>

          <div class="form-group">
              <label>Salle de Bain</label>
              <select name="bain_count" id="bain_count" class="form-control" onchange="updateTotalPrice()">
                  @for ($i = 1; $i <= 6; $i++)
                      <option value="{{ $i }}" {{ $i == 1 ? 'selected' : '' }}>{{ $i }}</option>
                  @endfor
              </select>
          </div>

          <div class="form-group">
              <label>Cuisine</label>
              <select name="cuisine_count" id="cuisine_count" class="form-control" onchange="updateTotalPrice()">
                  @for ($i = 1; $i <= 6; $i++)
                      <option value="{{ $i }}" {{ $i == 1 ? 'selected' : '' }}>{{ $i }}</option>
                  @endfor
              </select>
          </div>
        <div class="form-group">
            <label>Options</label>
            <div id="options-container" class="row">
                @foreach($options as $option)
                    <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4" onclick="toggleOption({{ $option->id }}, {{ $option->price }})">
                        <div data-v-2e87ca52="" class="extra-option" >
                            <div data-v-2e87ca52="" class="extra-icon" id="extra-{{ $option->id }}" >
                                <img data-v-2e87ca52="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                            </div>
                            <div class="extra-text">{{ $option->name }}</div>
                        </div>
                    </tui-booking-service-extra>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label>Total Price: </label>
            <span id="total-price">0</span> $
        </div>

        <button type="submit" class="btn btn-primary">Submit Reservation</button>
    </form>
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

    // Clear existing options
    optionsContainer.innerHTML = '';

    if (service) {
        const serviceOptions = JSON.parse(service.options);

        allOptions.forEach(option => {
            const isSelected = serviceOptions.some(serviceOption => serviceOption.id == option.id);
            const extraOption = `
                <tui-booking-service-extra class="col-sm-3 col-xs-4" onclick="toggleOption(${option.id}, ${option.price})">
                    <div class="extra-option">
                        <div class="extra-icon" id="extra-${option.id}" ${isSelected ? 'style="background-color: green;"' : ''}>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                        </div>
                        <div class="extra-text">${option.name}</div>
                    </div>
                </tui-booking-service-extra> `;
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
    const chambreCount = parseInt(document.getElementById('chambre_count').value) || 0;
    const bainCount = parseInt(document.getElementById('bain_count').value) || 0;
    const cuisineCount = parseInt(document.getElementById('cuisine_count').value) || 0;

    const chambrePrice = 15;   // Price per chambre
    const bainPrice = 30;      // Price per salle de bain
    const cuisinePrice = 40;   // Price per cuisine

    let chambreCost = chambreCount > 1 ? (chambreCount - 1) * chambrePrice : 0;
    let bainCost = bainCount > 1 ? (bainCount - 1) * bainPrice : 0;
    let cuisineCost = cuisineCount > 1 ? (cuisineCount - 1) * cuisinePrice : 0;

    let totalPrice = selectedServicePrice + chambreCost + bainCost + cuisineCost;

    selectedOptions.forEach(optionId => {
        const option = allOptions.find(option => option.id == optionId);
        if (option) {
            totalPrice += parseFloat(option.price);
        }
    });

    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}

document.getElementById('service').addEventListener('change', function () {
    const serviceId = this.value;
    loadOptions(serviceId);
});

// Initial load
document.addEventListener('DOMContentLoaded', function () {
    const initialServiceId = document.getElementById('service').value;
    if (initialServiceId) {
        loadOptions(initialServiceId);
    }
});

document.getElementById('reservation-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    const serviceId = formData.get('service_id');
    const chambreCount = formData.get('chambre_count');
    const bainCount = formData.get('bain_count');
    const cuisineCount = formData.get('cuisine_count');
    const selectedOptionsArray = Array.from(selectedOptions);  // Convert Set to Array

    const response = await fetch('{{ route('reservation.store') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            service_id: serviceId,
            chambre_count: chambreCount,
            bain_count: bainCount,
            cuisine_count: cuisineCount,
            selected_options: selectedOptionsArray,
        }),
    });

    if (response.ok) {
        const data = await response.json();
        // Handle successful response, e.g., show a success message or redirect
        console.log(data);
    } else {
        // Handle error response
        console.error('Error:', response.statusText);
    }
});

// For debugging purposes
console.log('All Options:', allOptions);
console.log('Selected Options:', Array.from(selectedOptions));
</script>





</body>

</html>