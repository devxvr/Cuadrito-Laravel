@extends('admin.layouts.app')

@section('title', 'Orders Today')

@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Orders Today
                    </h1>
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
    </div>
    
    <div class="row">
        <div class="container-xl px-4">
            <div class="card mt-3">
                <div class="card">
                    <div class="card-header border-bottom">
                        <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tab" href="#custom" data-bs-toggle="tab" role="tab" aria-controls="custom" aria-selected="true">Custom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="regular-tab" href="#regular" data-bs-toggle="tab" role="tab" aria-controls="regular" aria-selected="false">Regular</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="card-body">
                        @include('orders.partials.todaytabs-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('orders.partials.today-modals')

@endsection