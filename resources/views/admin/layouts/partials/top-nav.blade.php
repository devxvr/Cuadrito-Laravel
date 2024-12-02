<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <i data-feather="menu"></i>
    </button>
    
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="{{ route('reports.index') }}">Cuadrito Bakeshop</a>
    
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- Alerts Dropdown -->
        <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                <h6 class="dropdown-header dropdown-notifications-header">
                    <i class="me-2" data-feather="bell"></i>
                    Alerts Center
                </h6>
                
                @forelse($alerts as $alert)
                <a class="dropdown-item dropdown-notifications-item" href="{{ $alert->link }}">
                    <div class="dropdown-notifications-item-icon bg-warning">
                        <i data-feather="{{ $alert->icon }}"></i>
                    </div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">{{ $alert->created_at->format('F d, Y') }}</div>
                        <div class="dropdown-notifications-item-content-text">{{ $alert->message }}</div>
                    </div>
                </a>
                @empty
                <div class="dropdown-item text-center">No new alerts</div>
                @endforelse
                
                <a class="dropdown-item dropdown-notifications-footer" href="{{ route('alerts.index') }}">View All Alerts</a>
            </div>
        </li>

        <!-- Messages Dropdown -->
        <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="mail"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                <h6 class="dropdown-header dropdown-notifications-header">
                    <i class="me-2" data-feather="mail"></i>
                    Message Center
                </h6>
                
                @forelse($messages as $message)
                <a class="dropdown-item dropdown-notifications-item" href="{{ route('messages.show', $message->id) }}">
                    <img class="dropdown-notifications-item-img" src="{{ $message->sender->profile_photo_url }}" alt="{{ $message->sender->name }}" />
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">{{ Str::limit($message->content, 100) }}</div>
                        <div class="dropdown-notifications-item-content-details">{{ $message->sender->name }} · {{ $message->created_at->diffForHumans() }}</div>
                    </div>
                </a>
                @empty
                <div class="dropdown-item text-center">No new messages</div>
                @endforelse
                
                <a class="dropdown-item dropdown-notifications-footer" href="{{ route('messages.index') }}">Read All Messages</a>
            </div>
        </li>

        <!-- User Dropdown -->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-fluid" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('account.profile') }}">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Account
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>