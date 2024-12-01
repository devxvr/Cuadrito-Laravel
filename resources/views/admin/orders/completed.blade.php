@extends('admin.layouts.app')

@section('title', 'Completed Orders This Month')

@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Completed Orders This Month
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

        
        <div class="row">
            <div class="container-xl px-4 mt-3">
                <div class="card mb-4">
                    <div class="card-header">Completed Orders</div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Order Date</th>
                                    <th>Delivery/Pickup Date</th>
                                    <th>Type of Cake</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($completedOrders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ $order->order_date->format('m/d/Y') }}</td>
                                    <td>{{ $order->delivery_date->format('m/d/Y') }}</td>
                                    <td>{{ $order->cake_type }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                    type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailsModal"
                                                    data-order-id="{{ $order->id }}">
                                                <i data-feather="info"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        @include('orders.partials.completeddetails-modal')
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>
@endpush