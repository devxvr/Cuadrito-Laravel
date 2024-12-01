@extends('admin.layouts.app')

@section('title', 'Reports - Cuadrito Bakeshop')

@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Reports
                    </h1>
                    <div class="page-header-subtitle">Your Trust, Our Commitment. Ensuring Quality Every Time.</div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="row">
    <!-- Stats Cards -->
    <div class="row">
        <div class="col-lg-6 col-xl-4 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <a class="text-white medium stretched-link" href="{{ route('orders.today') }}">Order Today</a>
                            <div class="text-lg fw-bold">{{ $todayOrdersCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="clipboard"></i>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.partials.order-stats')
    </div>

    <!-- Charts -->
    <div class="row">
        <div class="col-xl-6 mb-4">
            @include('reports.partials.earnings-chart')
        </div>
        <div class="col-xl-6 mb-4">
            @include('reports.partials.sales-by-product-chart')
        </div>
    </div>

    <!-- Completed Orders Table -->
    <div class="row">
        <div class="container-fluid mb-4">
            @include('reports.partials.completed-orders-table')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Any additional page-specific JavaScript
</script>
@endpush