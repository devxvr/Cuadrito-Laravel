
@extends('admin.layouts.app')

@section('title', 'All Pending Orders')

@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        All Pending Orders
                    </h1>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                        <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                        <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        @include('admin.layouts.partials.order-stats')
        
        <div class="row">
            <div class="container-xl px-4">
                <div class="card mt-3">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
                                <li class="nav-item mb-n1">
                                    <a class="nav-link active" id="custom-tab" href="#custom" data-bs-toggle="tab" role="tab" aria-controls="custom" aria-selected="true">Custom</a>
                                </li>
                                <li class="nav-item mb-n1">
                                    <a class="nav-link" id="regular-tab" href="#regular" data-bs-toggle="tab" role="tab" aria-controls="regular" aria-selected="false">Regular</a>
                                </li>
                            </ul>
                            
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">
                                Add
                            </button>
                        </div>
                        
                        <div class="card-body">
                            @include('orders.partials.pendingtabs-table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('orders.partials.pending-modal')
@endsection

@push('scripts')
<script>
    // Any page-specific JavaScript can go here
</script>
@endpush