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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <script async="" defer="" src="https://buttons.github.io/buttons.js"></>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>

    <link href="{{url('assets/css/service.css')}}" rel=" stylesheet" />
    <style>

    .extra-icon.selected {
        background-color: #30c7b5;
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
      <div class="container mt-5">
        <h2>Réservation de Ménage</h2>
        <form id="booking-form" >
            <div class="form-group">
                <label for="service-type">Type de Service</label>
                <select class="form-control" id="service-type" name="service-type">
                    <option value="">Select votre Service </option>
                    <option value="regular">Ménage Régulier </option>
                    <option value="deep">Ménage en Profondeur </option>
                    <option value="move">Ménage Déménagement/Emménagement </option>
                    <option value="post-construction">Nettoyage Après Construction </option>
                    <option value="furniture">Nettoyage de Meubles en Tissu et de Tapis </option>
                    <option value="windows">Nettoyage des Vitres </option>
                </select>
            </div>
            <fieldset data-v-2e87ca52="" id="base" style="display:none;"  >
                <div data-v-2e87ca52="" class="text-start">
                    <h3 data-v-2e87ca52=""
                    style="font-weight: 100; font-size: 19px; font-family: proxima, arial; color: rgb(55, 62, 74); line-height: 1.1;">
                     Description </h3>
                </div>
                <div data-v-2e87ca52="" class="row" id="option-group" name="extra_options">
                      <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" class="extra-icon"  style=" background-color: #30c7b5;"  ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Aspiration</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" class="extra-icon"  style=" background-color: #30c7b5;" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Dépoussiérage</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" class="extra-icon"  style=" background-color: #30c7b5;" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Nettoyage des soles</div>
                </div>
            </tui-booking-service-extra>
            <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" class="extra-icon"  style=" background-color: #30c7b5;" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Désinfection des Salles des bain</div>
                </div>
            </tui-booking-service-extra>
             
         
    </div>
</fieldset>
            <!-- Fréquence (pour ménage régulier uniquement) -->
            <div class="form-group" id="frequency-group" style="display:none;">
                <label for="frequency">Fréquence</label>
                <select class="form-control" id="frequency" name="frequency">
                    <option value="one-time">Ponctuel (1 Seule fois)</option>
                    <option value="monthly">Monthly </option>
                    <option value="biweekly">Biweekly </option>
                    <option value="weekly">Weekly </option>
                </select>
            </div>
            <div class="form-group" id="chambre-group" >
                <label for="chambre-count">Nombre de chambre</label>
                <input type="number" class="form-control" id="chambre-count" name="chambre-count" min="0" value="0">
            </div>
            <div class="form-group" id="bain-group" >
                <label for="bain-count">Nombre de salle de bain</label>
                <input type="number" class="form-control" id="bain-count" name="bain-count" min="0" value="0">
            </div>
            <div class="form-group" id="cuisine-group" >
                <label for="cuisine-count">Nombre de cuisine</label>
                <input type="number" class="form-control" id="cuisine-count" name="cuisine-count" min="0" value="0">
            </div>
<fieldset data-v-2e87ca52="">
                <div data-v-2e87ca52="" class="text-start">
                    <h3 data-v-2e87ca52=""
                    style="font-weight: 100; font-size: 19px; font-family: proxima, arial; color: rgb(55, 62, 74); line-height: 1.1;">
                    AJOUTEZ DES OPTIONS SUPPLÉMENTAIRES</h3>
                </div>
                <div data-v-2e87ca52="" class="row" id="option-group" name="extra_options">
                      <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-1"  class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Intérieur du Four</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-2" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Intérieur du Réfrigérateur</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-3" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Intérieur de la Lave-vaisselle</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-4" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Intérieur de la Laveuse</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-5" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Intérieur de la Sécheuse</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-6" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Micro-ondes</div>
                </div>
            </tui-booking-service-extra>
              <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-7" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Élimination Minutieuse de la Poussière et des Débris</div>
                </div>
            </tui-booking-service-extra>
            <tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-8" class="extra-icon" ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Nettoyage des Murs</div>
                </div>
            </tui-booking-service-extra><tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
                <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
                    <div data-v-2e87ca52="" id="option-9" class="extra-icon " ><img
                        data-v-2e87ca52=""
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
                    </div>
                    <div data-v-2e87ca52="" class="extra-text">Nettoyage du meuble en tissu</div>
                </div>
            </tui-booking-service-extra><tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
      <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
        <div data-v-2e87ca52="" id="option-10" class="extra-icon" ><img
            data-v-2e87ca52=""
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
        </div>
        <div data-v-2e87ca52="" class="extra-text">Nettoyage des vitres</div>
      </div>
    </tui-booking-service-extra><tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
      <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
        <div data-v-2e87ca52="" id="option-11" class="extra-icon" ><img
            data-v-2e87ca52=""
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
        </div>
        <div data-v-2e87ca52="" class="extra-text">Organisation</div>
      </div>
    </tui-booking-service-extra><tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
      <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
        <div data-v-2e87ca52="" id="option-12" class="extra-icon" ><img
            data-v-2e87ca52=""
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
        </div>
        <div data-v-2e87ca52="" class="extra-text">Nettoyage du Garage</div>
      </div>
    </tui-booking-service-extra><tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
      <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
        <div data-v-2e87ca52="" id="option-13" class="extra-icon" ><img
            data-v-2e87ca52=""
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
        </div>
        <div data-v-2e87ca52="" class="extra-text">Nettoyage des Placards</div>
      </div>
    </tui-booking-service-extra><tui-booking-service-extra data-v-2e87ca52="" class="col-sm-3 col-xs-4">
      <div data-v-2e87ca52="" id="extra-undefined" class="extra-option">
        <div data-v-2e87ca52="" id="option-14" class="extra-icon" ><img
            data-v-2e87ca52=""
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAApCAYAAAC/QpA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q0RDNGOEZDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q0RDNGOTBDRTdBMTFFNDk5NDBCRTNBMUUxRDg4NDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDREM0Y4RENFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDREM0Y4RUNFN0ExMUU0OTk0MEJFM0ExRTFEODg0NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pjp/ERcAAAFvSURBVHja7JeBbYMwEEVNxAAeoWwAEzSMkAk6QpIN0gnSEcgEFRPEnaBMAIzgDci5+q5ONIgYQXAln3RyfDnZz3fnk4m6rhO+SNw0jaTxk3S7EoMi3SVJomMGokmrJ4Ok2Nsw5DEmLWkGoMlCp3PyR1a+bVY2sLcmTPh9Ir1ifESs/5ltciK9mpHZzrAdGLxGIH4kquvaVLCiP3JyTEFqJRtJXd8/R3T7a0gAM46kBaSxb2kebYRHEvfmJgrvpK+kXw8UNPev6HQKp/1dg2wVbB+IZGmjMgYjHGpl0J82u2c7ji1ka2aNa83rTpqasZGRKza9P2myt0k8s8/w28T7jBfi9dXmIlFcLiEfS6OaAvOCLirnPDnBmlubDfWZoTTt5wZh0d671ky6cF/xv4ADTIAJMAEmwPgGoxfcU7vClAvClK7vmQLj28wgF3rLFFNeegWDWuxB7m0Bh4+40PT+PYzygENZmN3KQAoM4ibAAI0igQ3XUaV0AAAAAElFTkSuQmCC">
        </div>
        <div data-v-2e87ca52="" class="extra-text">Pilage et rangement</div>
      </div>
    </tui-booking-service-extra>
    </div>
</fieldset>
           

            <!-- Nombre de tapis (pour nettoyage de tapis uniquement) -->
            <div class="form-group" id="carpet-group"  >
                <label for="carpet-count">Nombre de Tapis</label>
                <input type="number" class="form-control" id="carpet-count" name="carpet-count" min="0" value="0">
            </div>
            <div class="form-group">
                <label>Etats</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="leger" id="leger">
                    <label class="form-check-label" for="leger">
                        Légèrement sale
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="assez" id="assez">
                    <label class="form-check-label" for="assez">
                        Assez sale
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="tres" id="tres">
                    <label class="form-check-label" for="tres">
                        Très sale
                    </label>
                </div>
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
        <div  class="panel-body">
          <p >Ces informations seront utilisées pour vous contacter concernant votre service.</p>
          
            <div  class="row">
              <div  class="col-sm-6">
                <div  class="form-group"><input  class="form-control "
                    name="first-name" 
                    placeholder="First Name*" type="text"></div>
              </div>
              <div  class="col-sm-6">
                <div  class="form-group"><input  class="form-control "
                    name="last-name" placeholder="Last Name*"
                    type="text"></div>
              </div>
            </div>
            <div  class="row">
              <div  class="col-sm-6">
                <div  class="form-group"><input  class="form-control "
                    name="email"  placeholder="Email*"
                    type="email"></div>
              </div>
              <div  class="col-sm-6">
                <div class="form-group"><input  class="form-control "
                    name="phone"  placeholder="Phone*" type="text">
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
        <div class="panel-body" >
          <p >Où aimeriez-vous que nous nettoyions ?</p>
          
            <div class="row" >
              <div class="col-sm-6" >
                <div class="form-group" ><input class="form-control "
                    name="address"  placeholder="Adresse*" type="text"
                    ></div>
              </div>
              <div class="col-sm-6" >
                <div class="form-group" ><input class="form-control "
                    name="apt-suite"  placeholder="Apt/Suite #" type="text" >
                </div>
              </div>
            </div>
            <div class="row" >
              <div class="col-sm-4" >
                <div class="form-group"><input class="form-control " name="city"
                     placeholder="Ville*" type="text" data-v-2e87ca52=""></div>
              </div>
              <div class="col-sm-4" >
                <div class="form-group" ><select class="form-control " name="etat-type">
                    <option value="" selected="selected" data-v-2e87ca52="">État*</option>
                    <option value="1" data-v-2e87ca52="">AK</option>
                    <option value="2" data-v-2e87ca52="">AL</option>
                    <option value="3" data-v-2e87ca52="">AR</option><!-- Options for states -->
                  </select></div>
              </div>
              <div class="col-sm-4" >
                <div class="form-group" ><input class="form-control " name="zip"
                     placeholder="Code Postal*" type="text" ></div>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
            <div class="form-group">
                <label for="total-price">Prix Total</label>
                <input type="text" class="form-control" id="total-price" name="total-price" readonly>
            </div>
             <div class="form-group">
               <label for="service-date">Choose a date:</label>
                <input type="date" name="service-date" id="service-date" class="datepicker">
                <label for="service-time">Choose a time:</label>
                <input type="time" name="service-time"   id="service-time" class="timepicker">

            </div>

            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
    </div>

   
    @include('footer')
      </div>
    </main>
  </div>
  <!-- built files will be auto injected -->

<script>


    $(document).ready(function() {
        
    // Mise à jour du prix total en fonction des sélections
    function updateTotalPrice() {
        let totalPrice = 0;
        const serviceType = $('#service-type').val();
        const frequency = $('#frequency').val();
        const leger = $('#leger').is(':checked') ? 0 : 0;
        const assez = $('#assez').is(':checked') ? 60 : 0;
        const tres = $('#tres').is(':checked') ? 90 : 0;
        const extraPrices = {
            "option-1": 25,
            "option-2": 25,
            "option-3": 25,
            "option-4": 25,
            "option-5": 20,
            "option-6": 15,
            "option-7": 120,
            "option-8": 90,
            "option-9": 80,
            "option-10": 60,
            "option-11": 50,
            "option-12": 50,
            "option-13": 50,
            "option-14": 40,
        };
        const carpetCount = parseInt($('#carpet-count').val()) || 0;
        const chambreCount = parseInt($('#chambre-count').val()) || 0;
        const bainCount = parseInt($('#bain-count').val()) || 0;
        const cuisineCount = parseInt($('#cuisine-count').val()) || 0;
        const selectedExtras = document.querySelectorAll('.extra-icon.selected');
        
        selectedExtras.forEach(extra => {
            const extraId = extra.id;
            totalPrice += extraPrices[extraId] || 0;  // Add price of selected extra
        });

        if (serviceType === 'regular') {
            if (frequency === 'one-time') totalPrice += 54;
            else if (frequency === 'monthly') totalPrice += 44;
            else if (frequency === 'biweekly') totalPrice += 34;
            else if (frequency === 'weekly') totalPrice += 14;
        } else if (serviceType === 'deep') {
            totalPrice += 80;
         
        } else if (serviceType === 'move') {
            totalPrice += 80;
        } else if (serviceType === 'post-construction') {
            totalPrice += 80;
        } else if (serviceType === 'furniture') {
            totalPrice += 0 ;
        } else if (serviceType === 'windows') {
            totalPrice += 0;
        }

        totalPrice += leger + assez + tres + (chambreCount * 15) + (bainCount * 30) + (cuisineCount * 40) + (carpetCount * 40);

        $('#total-price').val(totalPrice);
        
        return totalPrice; // Return totalPrice if needed
    }

    // Function to toggle selected options
    function toggleSelectedOptions(serviceType) {
        const optionsToSelect = {
            'deep': ['#option-1', '#option-2', '#option-3', '#option-4', '#option-5', '#option-6', '#option-13'],
            'move': ['#option-1', '#option-2', '#option-3', '#option-4', '#option-5', '#option-6', '#option-8', '#option-13'],
            'post-construction': ['#option-1', '#option-2', '#option-3', '#option-4', '#option-5', '#option-6', '#option-7', '#option-8', '#option-13'],
            'furniture':['#option-9'],
            'windows':['#option-10'],
        };

        $('.extra-icon').removeClass('selected');

        if (optionsToSelect[serviceType]) {
            optionsToSelect[serviceType].forEach(option => $(option).addClass('selected'));
        }
    }

    // Affichage des options en fonction du type de service
    $('#service-type').change(function() {
        const serviceType = $(this).val();
        if (serviceType === 'regular') {
            $('#frequency-group').show();
            // Automatically select 1 chambre, 1 cuisine, and 1 salle de bain
            $('#chambre-count').val(1);
            $('#cuisine-count').val(1);
            $('#bain-count').val(1);
        } else {
            $('#frequency-group').hide();
            // Reset counts when not regular
            $('#chambre-count').val(0);
            $('#cuisine-count').val(0);
            $('#bain-count').val(0);
        }
        if (serviceType === 'regular' || serviceType === 'post-construction' || serviceType === 'move' || serviceType === 'deep') {
            $('#base').show();
        } else {
            $('#base').hide();
        }

        toggleSelectedOptions(serviceType);

        updateTotalPrice();
    });

    // Update the total price in real-time
    $('#frequency,#leger,#assez,#tres, #carpet-count, #chambre-count, #bain-count, #cuisine-count').change(function() {
        updateTotalPrice();
    });

    // Initialize the total price
    updateTotalPrice();

    // Toggle selected class on extra icons
    const extraOptions = document.querySelectorAll('.extra-icon');
    extraOptions.forEach(option => {
        option.addEventListener('click', () => {
            option.classList.toggle('selected');
            updateTotalPrice();
            // console.log(updateTotalPrice()); // Optionally log the total price
        });
    });
});


</script>


</body>

</html>