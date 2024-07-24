<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						@can('view user')
							
						
						<li class="active"> <a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Permission </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('permissions') }}"> All Permission </a></li>
								<li><a href="{{ url('permissions/create') }}"> Add permission </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user-tag"></i> <span> Role </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('roles') }}"> All Roles</a></li>
								<li><a href="{{ url('roles/create') }}"> Add Role </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('users') }}"> All Users</a></li>
								<li><a href="{{ url('users/create') }}"> Add User </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-address-book"></i> <span> Contacts </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('contacts')}}"> All Contact</a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-briefcase"></i> <span> Contacts Commercial </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{route('contacts-commercial')}}"> All Contact</a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-concierge-bell"></i> <span> Services </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('service') }}"> All Services</a></li>
								<li><a href="{{ url('service/create') }}"> Add Service </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-cogs"></i> <span> Options </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('option') }}"> All Options</a></li>
								<li><a href="{{ url('option/create') }}"> Add Option </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Reservations </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('reservation/all') }}"> All Reservations</a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Clients </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="{{ url('clients/all') }}"> All Clients</a></li>
							</ul>
						</li>
						
						@endcan
					</ul>
				</div>
			</div>
		</div>