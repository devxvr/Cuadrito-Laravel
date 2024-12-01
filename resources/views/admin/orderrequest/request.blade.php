@extends('admin.layouts.app')

@section('title', 'Orders Request')

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
                    <div class="tab-content" id="cardTabContent">
                        <!-- Custom Tab -->
                        <div class="tab-pane fade show active" id="custom" role="tabpanel" aria-labelledby="custom-tab">
                            <div class="container-xl px-2 mt-2">
                                <table id="datatablesCustom" class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Order Date</th>
                                            <th>Scheduled Date</th>
                                            <th>Payment Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customOrders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->customer_name }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ $order->order_date }}</td>
                                            <td>{{ $order->scheduled_date }}</td>
                                            <td>
                                                <div class="badge bg-primary text-white rounded-pill">
                                                    {{ $order->payment_status }}
                                                </div>
                                            </td>
                                            <td>
                                                @include('orderrequest.partials.action', ['order' => $order])
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Regular Tab -->
                        <div class="tab-pane fade" id="regular" role="tabpanel" aria-labelledby="regular-tab">
                            <div class="container-xl px-2 mt-2">
                                <table id="datatablesRegular" class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Order Date</th>
                                            <th>Scheduled Date</th>
                                            <th>Payment Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($regularOrders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->customer_name }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ $order->order_date }}</td>
                                            <td>{{ $order->scheduled_date }}</td>
                                            <td>
                                                <div class="badge bg-primary text-white rounded-pill">
                                                    {{ $order->payment_status }}
                                                </div>
                                            </td>
                                            <td>
                                                @include('orderrequest.partials.action', ['order' => $order])
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('orderrequest.modals.details')
            @include('orderrequest.modals.success')
            @include('orderrequest.modals.message')
        </div>
    </div>
</div>
@endsection