<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Cuadrito Bakeshop')</title>
    
    <link href="{{ asset('public/css/datatables.style.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/litepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/styles.css') }}" rel="stylesheet" />
    
    <script data-search-pseudo-elements defer src="{{ asset('vendor/fontawesome-free-6.5.2-web/js/all.min.js') }}"></script>
    <script src="{{ asset('node_modules/feather-icons/dist/feather.min.js') }}"></script>
</head>
<body class="nav-fixed">
    @include('layouts.partials.top-nav')
    
    <div id="layoutSidenav">
        @include('layouts.partials.sidebar')
        
        <div id="layoutSidenav_content">
            <main>
                @yield('header')
                
                <div class="container-xl px-8 mt-n10">
                    @yield('content')
                </div>
            </main>
            
            @include('layouts.partials.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"></script>
    <script src="{{ asset('js/litepicker.js') }}"></script>
    <script src="{{ asset('js/delete-button.js') }}"></script>
    <script src="{{ asset('public/admin/js/datatables/datatables-custom-regular.js') }}"></script>
    <script src="{{ asset('public/admin/js/datatables/datatables-product-adons.js') }}"></script>
    <script src="{{ asset('public/admin/js/datatables/datatables-simple-demo.js') }}"></script>
    <script src="{{ asset('public/admin/js/button.deal.js') }}"></script>
    
    @stack('scripts')
</body>
</html>