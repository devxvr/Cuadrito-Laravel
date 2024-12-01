<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Dashboard -->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboards
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            
            <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="{{ route('reports.index') }}">Reports</a>
                    <a class="nav-link" href="{{ route('orders.today') }}">Order Today</a>
                    <a class="nav-link" href="{{ route('orders.pending') }}">All Pending Orders</a>
                    <a class="nav-link" href="{{ route('orders.completed') }}">Completed Orders This Month</a>
                </nav>
            </div>
            
            <!-- Other Menu Items -->
            <a class="nav-link" href="{{ route('orderrequests.request') }}">
                <div class="nav-link-icon"><i data-feather="bookmark"></i></div>
                Order Request
            </a>
            
            <a class="nav-link" href="{{ route('productaddons.productaddons') }}">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                Products and Ad-ons
            </a>
            <a class="nav-link" href="{{ route('calendar') }}">
                <div class="nav-link-icon"><i data-feather="calendar"></i></div>
                Calendar
            </a>
            <a class="nav-link" href="{{ route('dealsoffer.dealsoffer') }}">
                <div class="nav-link-icon"><i data-feather="tag"></i></div>
                Deals and Offer
            </a>
            <a class="nav-link" href="{{ route('reviews.review') }}">
                <div class="nav-link-icon"><i data-feather="edit-2"></i></div>
                Reviews
            </a>
            
            <!-- Add other menu items similarly -->
        </div>
    </div>
    
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>