<div class="header">
    <div class="header-left">
        <a href="/" class="logo"> <img src="{{asset('assets/img/H-Logo.png')}}" width="20" height="50" alt="logo"> <span class="logoclass">Hygeco</span> </a>
        <a href="/" class="logo logo-small"> <img src="{{asset('assets/img/H-Logo.png')}}" alt="Logo" width="30" height="30"> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fe fe-bell"></i>
                @if (auth()->user()->unreadNotifications)
                <span class="badge badge-pill">{{ auth()->user()->unreadNotifications->count() }}</span>
                 @endif
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                     <ul class="notification-list">
                        @if(isset($notifications) && $notifications->isNotEmpty())
                            @foreach($notifications as $notification)
                                @if($notification->type == 'App\Notifications\ReservationCreated')
								
                                    <li class="notification-message">
                                        <a href="{{ route('mark-as-read') }}">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/img/profiles/avatar-11.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">{{ $notification->data['client_name'] ?? 'Client' }}</span> has sent you a booking in the amount of <span
														class="noti-title">{{ $notification->data['total_price'] }}$</span></p>
												<p class="noti-time"><span class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
												</p>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                
                                @elseif($notification->type == 'App\Notifications\ReservationConfirmed')
                                
                                    <li class="notification-message">
                                        <a href="{{ route('mark-as-read') }}">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/img/profiles/avatar-11.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Admin</span> has sent you a confirmation in the amount of <span
														class="noti-title">{{ $notification->data['total_price'] }}$</span></p>
												<p class="noti-time"><span class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
												</p>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @elseif($notification->type == 'App\Notifications\ReservationCustomized')
                                
                                    <li class="notification-message">
                                        <a href="{{ route('mark-as-read') }}">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/img/profiles/avatar-11.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Your reservation time has been updated.</span>  in the amount of <span
														class="noti-title">{{ $notification->data['total_price'] }}$</span></p>
												<p class="noti-time"><span class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
												</p>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endif
                            @endforeach
                        @else
                            <li class="notification-message">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>No new notifications.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{asset('assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Soeng Souy"></span> </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm"> <img src="{{asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle"> </div>
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">{{ Auth::user()->roles->pluck('name')->implode(', ') }}</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{route('profile.edit')}}">My Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                </form>
            </div>
        </li>
    </ul>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
