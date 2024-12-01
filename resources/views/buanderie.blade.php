<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="icon" href="/favicon.png" />

    <title>Reservation Buanderie</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>


    <link href="{{url('assets/css/service.css')}}" rel="stylesheet" />
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        
        
        /* Adjusting the padding and margin for small screens */
        @media (max-width: 576px) {
            .form-group label {
                font-size: 1rem;
            }
            .form-group input,
            .form-group select {
                font-size: 0.9rem;
            }
            .btn {
                width: 100%;
                margin-top: 10px;
            }
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

            <div data-v-2e87ca52="" class="page-header position-relative bg-cover" style="background-image: url('../assets/img/200.png'); padding: 100px;">
                <span class="mask opacity-8" style="background-color:#bfbfbf;" data-v-2e87ca52=""></span>
                <div class="container pb-10 pb-lg-9 pt-7 position-relative z-index-2" data-v-2e87ca52="">
                    <div class="row" data-v-2e87ca52="">
                        <div class="mx-auto text-center col-md-6 mt-4" data-v-2e87ca52="">
                            <h3 class="text-center " style="color:#30c7b5;" data-v-2e87ca52="">Reservation </h3>
                            <p class="text-center " style="color:#30c7b5;"  data-v-2e87ca52="">Hygeco is a Montreal-based company that offers a range of professional cleaning and laundry services</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi-step form -->
            <div class="container py-4">
                <form id="reservationForm" action="{{ route('buanderie.store') }}" method="POST" class="row g-3">
                    @csrf
                    <!-- Step 1 -->
                    <div class="step active col-12">
                        <h4>Step 1: Quels types de produits aimeriez-vous faire nettoyer ?</h4>
                        <div class="form-group mb-3">
                            <label for="couette_double">Couette double ($17)</label>
                            <input type="number" class="form-control" id="couette_double" name="couette_double" min="0" value="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="couette-queen">Couette queen ($20)</label>
                            <input type="number" class="form-control" id="couette_queen" name="couette_queen" min="0" value="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="couette-king">Couette king ($23)</label>
                            <input type="number" class="form-control" id="couette_king" name="couette_king" min="0" value="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="oreiller">Oreiller ($20, $15 each for 3+)</label>
                            <input type="number" class="form-control" id="oreiller" name="oreiller" min="0" value="0">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>

                    <div class="step  col-12">
                        <h4>Step 2:Combien de sacs avez-vous ?</h4>
                        <div class="form-group mb-3">
                            <label for="sac">Sac Hygeco = *lb</label>
                            <input type="number" class="form-control" id="sac" name="sac" min="0" value="0">
                            <div class="text-center p-3">
                            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 853.33331 853.33331" height="50" width="50"
                                    xml:space="preserve" id="svg2" version="1.1">
                                    <metadata id="metadata8">
                                    <rdf:RDF>
                                        <cc:Work rdf:about="">
                                        <dc:format>image/svg+xml</dc:format>
                                        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                        </cc:Work>
                                    </rdf:RDF>
                                    </metadata>
                                    <defs id="defs6" />
                                    <g transform="matrix(1.3333333,0,0,-1.3333333,0,853.33333)" id="g10">
                                    <g transform="scale(0.1)" id="g12">
                                        <path id="path14" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 835.344,4195.11 c -5.41,0 -10.903,1.1 -16.156,3.4 -20.27,8.94 -29.493,32.64 -20.567,52.93 10.82,24.54 21.977,48.87 33.535,72.99 9.574,20.02 33.535,28.49 53.559,18.92 20,-9.55 28.457,-33.56 18.887,-53.52 -11.172,-23.42 -22.036,-47 -32.485,-70.75 -6.637,-15.03 -21.363,-23.97 -36.773,-23.97 z m -78.008,-199.34 c -4.34,0 -8.731,0.7 -13.066,2.2 -20.977,7.22 -32.114,30.05 -24.922,51.01 11.797,34.27 24.414,68.61 37.539,102.06 8.062,20.71 31.406,30.84 52.008,22.74 20.648,-8.05 30.839,-31.36 22.738,-52.01 -12.695,-32.41 -24.922,-65.71 -36.328,-98.9 -5.727,-16.65 -21.313,-27.1 -37.969,-27.1 z m -85.219,-309.45 c -2.73,0 -5.484,0.28 -8.238,0.86 -21.738,4.55 -35.625,25.82 -31.098,47.52 14.746,70.56 32.715,141.47 53.364,210.76 6.343,21.27 28.71,33.25 49.941,26.97 21.25,-6.33 33.316,-28.7 26.988,-49.92 -20.015,-67.15 -37.398,-135.86 -51.719,-204.26 -3.945,-18.91 -20.64,-31.93 -39.238,-31.93 z m -54.804,-531.54 c -22.145,0 -40.133,17.98 -40.133,40.15 0,145.11 11.968,290.74 35.562,432.86 3.637,21.91 24.067,36.59 46.176,33.04 21.852,-3.6 36.656,-24.3 33.023,-46.15 -22.871,-137.81 -34.492,-279.04 -34.492,-419.75 0,-22.17 -17.969,-40.15 -40.136,-40.15" />
                                        <path id="path16" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="M 3199.99,576.57 C 1753.78,576.57 577.18,1753.9 577.18,3203.9 h 80.269 c 0,-1420 1140.591,-2547.029 2542.541,-2547.029 699.26,0 1351.02,275.781 1835.2,780.599 l 57.96,-54.44 C 4593.66,862.281 3921.34,576.57 3199.99,576.57" />
                                        <path id="path18" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="M 4872.59,1497.35 5251.67,1626 5173.6,1233.37 Z" />
                                        <path id="path20" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 5747.72,2728.5 c -2.18,0 -4.37,0.16 -6.62,0.52 -21.85,3.64 -36.66,24.31 -33.02,46.19 22.85,137.68 34.45,278.9 34.45,419.72 0,22.16 17.99,40.15 40.16,40.15 22.14,0 40.13,-17.99 40.13,-40.15 0,-145.21 -11.95,-290.85 -35.54,-432.87 -3.27,-19.66 -20.28,-33.56 -39.56,-33.56 z m -72.28,-312.75 c -3.81,0 -7.66,0.53 -11.5,1.68 -21.25,6.32 -33.32,28.69 -27,49.94 20.02,67.14 37.41,135.83 51.72,204.26 4.53,21.69 26.04,35.54 47.5,31.05 21.72,-4.53 35.63,-25.81 31.08,-47.51 -14.75,-70.57 -32.7,-141.46 -53.36,-210.75 -5.2,-17.43 -21.17,-28.67 -38.44,-28.67 z m -69.71,-202.48 c -4.86,0 -9.8,0.9 -14.61,2.77 -20.64,8.08 -30.84,31.35 -22.79,52 12.91,33 25.14,66.27 36.37,98.94 7.2,20.96 30.08,32.12 51.03,24.91 20.96,-7.21 32.09,-30.05 24.9,-51.02 -11.6,-33.69 -24.21,-68.03 -37.5,-102.06 -6.19,-15.84 -21.34,-25.54 -37.4,-25.54 z m -68.98,-159.76 c -5.74,0 -11.54,1.23 -17.09,3.81 -20.04,9.47 -28.63,33.4 -19.18,53.45 9.35,19.88 18.51,39.88 27.4,60.04 8.93,20.27 32.62,29.47 52.91,20.54 20.29,-8.97 29.49,-32.67 20.53,-52.95 -9.14,-20.75 -18.56,-41.4 -28.22,-61.87 -6.86,-14.51 -21.27,-23.02 -36.35,-23.02" />
                                        <path id="path22" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 5822.82,3203.9 h -80.29 c 0,1390 -1140.59,2538.03 -2542.54,2538.03 -698.32,0 -1349.49,-279.63 -1833.5,-783.31 l -57.93,54.53 c 499.32,519.58 1171.04,809.64 1891.43,809.64 1446.23,0 2622.83,-1178.89 2622.83,-2618.89" />
                                        <path id="path24" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 1528.99,4894.09 -379.18,-128.27 78.46,392.57 z" />
                                        <path id="path26" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 2716.1,4273.9 v 320 h 925.49 l 8.95,-320 h 205.17 l -120.45,460 H 2611.2 l -109.02,-460 h 213.92" />
                                        <path id="path28" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 2793.84,2914.89 c 11.76,8.89 17.67,20.41 17.67,36.82 0,17.15 -6.09,36.81 -18.22,43.93 -12.13,7.14 -31.05,18.26 -56.74,18.26 h -40.45 v -110 h 46.35 c 22.48,0 39.59,2.07 51.39,10.99" />
                                        <path id="path30" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 2807.22,2835.84 c -13.56,7.85 -34.09,18.06 -61.55,18.06 h -49.57 v -100 h 46.88 c 8.57,0 17.85,-10.8 27.83,-9.55 9.98,1.25 19.18,-1.86 27.58,2.07 8.36,3.9 15.33,6.76 20.88,14.26 5.51,7.51 8.3,19.19 8.3,31.71 0,19.97 -6.82,35.58 -20.35,43.45" />
                                        <path id="path32" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 3735.4,3426.12 c -10.18,-24.45 -24.36,-45.5 -42.56,-63.16 -18.2,-17.67 -39.78,-31.39 -64.78,-41.22 -24.96,-9.83 -52.27,-14.72 -81.9,-14.72 -29.26,0 -56.29,4.89 -81.09,14.72 -24.81,9.83 -46.21,23.55 -64.22,41.22 -18.03,17.66 -32.13,38.71 -42.29,63.16 -10.17,24.43 -15.27,51.47 -15.27,81.09 0,30.31 5.1,57.7 15.27,82.16 10.16,24.44 24.26,45.23 42.29,62.37 18.01,17.15 39.41,30.31 64.22,39.62 24.8,9.26 51.83,13.9 81.09,13.9 29.63,0 56.94,-4.64 81.9,-13.9 25,-9.31 46.58,-22.47 64.78,-39.62 18.2,-17.14 32.38,-37.93 42.56,-62.37 10.16,-24.46 15.23,-51.85 15.23,-82.16 0,-29.62 -5.07,-56.66 -15.23,-81.09 z m 0.7,-731.96 c -30,-9.31 -46.11,-16.52 -69.16,-21.69 -23,-5.18 -52.34,-7.76 -82.32,-7.76 -30.72,0 -60.12,4.88 -85.43,14.7 -25.33,9.84 -47.84,23.56 -66.05,41.22 -18.18,17.68 -32.72,38.71 -42.9,63.18 -10.15,24.4 -15.45,51.45 -15.45,81.06 0,30.33 5.16,57.72 15.69,82.18 10.55,24.44 24.93,45.22 43.33,62.36 18.34,17.14 40.03,30.33 65.01,39.62 24.98,9.25 52.05,13.91 81.33,13.91 30.31,0 58.1,-4.39 83.24,-13.13 25.17,-8.72 45.41,-20.24 60.76,-34.49 l -46.56,-50.34 c -9.65,10.72 -23.11,19.81 -40.41,27.29 -17.33,7.52 -36.15,11.24 -56.49,11.24 -20,0 -38.1,-3.56 -54.33,-10.7 -16.23,-7.14 -30.06,-16.96 -41.47,-29.44 -11.44,-12.5 -20.27,-27.11 -26.52,-43.87 -6.23,-16.78 -9.36,-35 -9.36,-54.63 0,-20.32 3.13,-38.98 9.36,-55.92 6.25,-16.94 15.17,-31.68 26.78,-44.17 11.6,-12.49 25.68,-22.22 42.28,-29.16 16.6,-6.96 33.79,-10.44 54.86,-10.44 28.91,0 43.81,4.48 73.81,13.38 v 115.34 h -90 v 50 h 170 z m -479.8,9.74 -35.33,70 h -164.32 l -34.28,-70 h -75.47 l 164.87,370 h 58.34 l 163.26,-370 z m -294.92,885.47 c 10.52,24.44 24.98,45.23 43.36,62.37 18.38,17.15 40.05,30.31 65.02,39.62 24.98,9.26 52.11,13.9 81.36,13.9 12.13,0 24.81,-1.15 38.03,-3.47 13.16,-2.33 25.86,-5.88 38.01,-10.69 12.13,-4.84 23.55,-10.82 34.24,-17.96 10.72,-7.12 19.8,-15.71 27.3,-25.69 l -51.39,-40.66 c -10,13.53 -23.02,23.46 -39.06,29.68 -16.07,6.25 -31.79,9.36 -47.13,9.36 -19.63,0 -37.46,-3.55 -53.53,-10.68 -16.04,-7.14 -29.87,-16.97 -41.47,-29.47 -11.62,-12.49 -20.52,-27.1 -26.77,-43.85 -6.23,-16.78 -9.36,-35 -9.36,-54.62 0,-20.71 3.05,-39.6 9.1,-56.72 6.06,-17.14 14.71,-31.86 25.96,-44.17 11.23,-12.31 24.73,-21.85 40.43,-28.65 15.68,-6.79 33.34,-10.16 52.99,-10.16 20.33,0 38.36,3.99 54.06,12.05 15.68,8.02 28.36,18.62 38.01,31.83 l 54.04,-38 c -16.78,-21.07 -37.3,-37.37 -61.54,-48.99 -24.28,-11.58 -52.64,-17.38 -85.1,-17.38 -29.65,0 -56.86,4.89 -81.66,14.72 -24.81,9.83 -46.09,23.55 -63.95,41.22 -17.85,17.66 -31.75,38.71 -41.73,63.16 -10.02,24.43 -15.02,51.47 -15.02,81.09 0,30.31 5.25,57.7 15.8,82.16 z m -78.71,-856.95 c -8.21,-14.11 -19.01,-25.43 -32.37,-34 -13.38,-8.55 -28.73,0.07 -46.03,-3.69 -17.31,-3.76 -34.89,9.17 -52.72,9.17 H 2606.1 v 370 h 156.68 c 14.28,0 28.36,-12.01 42.29,-15.4 13.9,-3.4 26.33,-14.06 37.21,-21.73 10.89,-7.7 19.68,-20.14 26.5,-32.27 6.76,-12.16 10.16,-28.05 10.16,-45.19 0,-21.41 0.44,-39.71 -11.68,-53.61 -12.17,-13.9 -41.16,-24.57 -41.16,-30.62 v -1.11 c 0,-3.19 37.03,-12.49 52.41,-27.81 15.31,-15.37 19.74,-35.86 19.74,-61.57 0,-20.7 -7.36,-38.08 -15.58,-52.17 z M 2606.1,3713.9 h 240 v -50 h -180 v -110 h 180 v -60 h -180 v -110 h 210 v -50 h -270 z M 4481.4,2446.4 c -78.38,462.44 -391.94,1857.5 -391.94,1857.5 H 2247.37 l -389.1,-1855.45 c 0,0 -42.01,-364.55 394.71,-394.55 h 1825.29 c 0,0 481.52,-69.94 403.13,392.5" />
                                        <path id="path34" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 3641.44,3605.68 c -11.43,12.5 -25.14,22.33 -41.2,29.47 -16.07,7.13 -33.92,10.68 -53.53,10.68 -19.65,0 -37.38,-3.55 -53.26,-10.68 -15.88,-7.14 -29.53,-16.97 -40.96,-29.47 -11.41,-12.49 -20.25,-27.1 -26.48,-43.85 -6.25,-16.78 -9.36,-35 -9.36,-54.62 0,-20.34 3.11,-39 9.36,-55.94 6.23,-16.93 15.15,-31.67 26.75,-44.16 11.61,-12.5 25.36,-22.23 41.21,-29.17 15.9,-6.96 33.46,-10.43 52.74,-10.43 19.28,0 36.95,3.47 52.99,10.43 16.05,6.94 29.88,16.67 41.48,29.17 11.6,12.49 20.51,27.23 26.76,44.16 6.25,16.94 9.39,35.6 9.39,55.94 0,19.62 -3.14,37.84 -9.39,54.62 -6.25,16.75 -15.08,31.36 -26.5,43.85" />
                                        <path id="path36" style="fill:#1b5065;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                        d="m 3079.64,2833.9 h 117.77 l -58.36,154.15 z" />
                                    </g>
                                    </g>
                                </svg>
                                </div>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="step col-12">
                        <h4>Step 3: Enter your personal details and address</h4>
                        <div class="form-group mb-3">
                             <label >Date et heure de la collecte (*AM = matin / PM = après-midi)</label>
                            <input class="form-control"id="collecte" name="collecte" type="text" placeholder="select DateTime"/>  
                        </div>
                        <div class="form-group mb-3">
                            <label >Date et heure de livraison (*AM = matin / PM = après-midi)</label>
                            <input class="form-control" id="livraison" name="livraison" type="text" placeholder="select DateTime"/>  
                        </div>   
                       <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="step col-12">
                        <h4>Step 4: Adresse de la collecte/livraison</h4>
                         <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" required>
                        </div>
                         <div class="form-group">
                            <label for="facultatif">Complément d'adresse (facultatif)</label>
                            <input type="text" class="form-control" id="facultatif" name="facultatif" required>
                        </div>
                         <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" id="ville" name="ville" required>
                        </div>
                         <div class="form-group">
                            <label for="zip">Code Postal</label>
                            <input type="text" class="form-control" id="zip" name="zip" required>
                        </div>
                         <div class="form-group">
                            <label for="instruction">Instructions pour le livreur</label>
                            <input type="text" class="form-control" id="instruction" name="instruction" required>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>


                    <div class="step col-12">
                        <h4>Step 4: Information Personnels</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="last_name">Prénom</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                         <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        
                         <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                    </div>

                 

                    <!-- Step 5 -->
                    <div class="step col-12">
                        <h4>Step 5: Summary</h4>
                        <div class="form-group mb-3">
                            <label for="total_price">Total Price:</label>
                            <div class="input-group">
                                        <span class="input-group-text">$</span> <!-- Added span for dollar sign -->
                                        <input type="text" class="form-control" id="total_price" name="total_price" value="{{ old('total_price', $buanderieForm->summary ?? '') }}" readonly>
                            </div>                        
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                       
                    </div>

                    <!-- Step 6 -->
                    <div class="step col-12">
                        <h4>Step 6: Payment</h4>
                     
                        <button type="submit" class="btn btn-success">Submit Reservation</button>
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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 

<script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('#collecte', {
                enableTime: true,
                dateFormat: 'Y-m-d H:i'
            });
            flatpickr('#livraison', {
                enableTime: true,
                dateFormat: 'Y-m-d H:i'
            });

            let currentStep = 0;
            const steps = document.querySelectorAll('.step');

            function showStep(step) {
                steps.forEach((s, index) => {
                    s.classList.toggle('active', index === step);
                });
            }

            function nextStep() {
                var activeStep = document.querySelector('.step.active');
                var nextStep = activeStep.nextElementSibling;

                if (nextStep) {
                    activeStep.classList.remove('active');
                    nextStep.classList.add('active');
                    currentStep++;

                    // Check if this is the summary step and update the total price
                    if (nextStep.querySelector('#total_price')) {
                        let totalPrice = calculateTotalPrice();
                        document.getElementById('total_price').value = totalPrice;
                    }
                }
            }

            function prevStep() {
                var activeStep = document.querySelector('.step.active');
                var prevStep = activeStep.previousElementSibling;

                if (prevStep) {
                    activeStep.classList.remove('active');
                    prevStep.classList.add('active');
                    currentStep--;
                }
            }

            function calculateTotalPrice() {
                let couetteDouble = document.getElementById('couette_double').value * 17;
                let couetteQueen = document.getElementById('couette_queen').value * 20;
                let couetteKing = document.getElementById('couette_king').value * 23;
                let oreillerCount = document.getElementById('oreiller').value;
                let oreiller = oreillerCount * (oreillerCount >= 3 ? 15 : 20);

                return couetteDouble + couetteQueen + couetteKing + oreiller;
            }

            document.addEventListener("DOMContentLoaded", function() {
                showStep(currentStep);
            });

            // Expose functions to global scope
            window.nextStep = nextStep;
            window.prevStep = prevStep;
        });
    </script>
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