@extends('admin.layouts.app')

@section('title', 'Products and Add Ons')

@section('header')
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="edit-2"></i></div>
                                    Products and Add Ons
                                </h1>
                                <div class="page-header-subtitle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
@endsection

<div class="container-xl px-4">
    <div class="card mt-n10">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
                <li class="nav-item mb-n1">
                    <a class="nav-link active" id="product-tab" href="#product" data-bs-toggle="tab" role="tab" aria-controls="product" aria-selected="true">Products</a>
                </li>
                <li class="nav-item mb-n1">
                    <a class="nav-link" id="adons-tab" href="#adons" data-bs-toggle="tab" role="tab" aria-controls="adons" aria-selected="false">Ad-Ons</a>
                </li>
            </ul>
            
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">
                Add
            </button>
        </div>

        <div class="card-body">
            <div class="tab-content" id="cardTabContent">
                <!-- Products Tab -->
                <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
                    <div class="container-xl px-2 mt-2">
                        <table id="datatablesProduct" class="table">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Flavor</th>
                                    <th>Price</th>
                                    <th>Date Added</th>
                                    <th>Status</th>
                                    <th>Disable Product</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->flavor }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->created_at->format('m/d/Y') }}</td>
                                    <td>
                                        <div class="badge bg-primary text-white rounded-pill">
                                            {{ $product->is_disabled ? 'Unavailable' : 'Available' }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" 
                                                   id="toggle-{{ $product->id }}"
                                                   {{ $product->is_disabled ? 'checked' : '' }}>
                                            <label class="form-check-label" for="toggle-{{ $product->id }}">
                                                {{ $product->is_disabled ? 'On' : 'Off' }}
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown me-2">
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark" 
                                                        type="button" 
                                                        data-bs-toggle="dropdown" 
                                                        aria-haspopup="true" 
                                                        aria-expanded="false">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" 
                                                       href="#" 
                                                       data-bs-toggle="modal" 
                                                       data-bs-target="#modalEdit">Edit</a>
                                                    <a class="dropdown-item" 
                                                       href="#" 
                                                       data-bs-toggle="modal" 
                                                       data-bs-target="#modalDetails">Details</a>
                                                </div>
                                            </div>
                                            <form action="{{ route('products.destroy', $product) }}" 
                                                  method="POST" 
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-datatable btn-icon btn-transparent-dark" 
                                                        onclick="return confirm('Are you sure?')">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add-ons Tab -->
                <div class="tab-pane fade" id="adons" role="tabpanel" aria-labelledby="adons-tab">
                    <!-- Similar structure to Products, but with add-ons -->
                    <div class="container-xl px-2 mt-2">
                        <table id="datatablesAdons" class="table">
                            <thead>
                                <tr>
                                    <th>Add-On ID</th>
                                    <th>Ad-On Name</th>
                                    <th>Price</th>
                                    <th>Date Added</th>
                                    <th>Status</th>
                                    <th>Disable Add-Ons</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $addon->id }}</td>
                                    <td>{{ $addon->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->created_at->format('m/d/Y') }}</td>
                                    <td>
                                        <div class="badge bg-primary text-white rounded-pill">
                                            {{ $product->is_disabled ? 'Unavailable' : 'Available' }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" 
                                                   id="toggle-{{ $product->id }}"
                                                   {{ $product->is_disabled ? 'checked' : '' }}>
                                            <label class="form-check-label" for="toggle-{{ $product->id }}">
                                                {{ $product->is_disabled ? 'On' : 'Off' }}
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown me-2">
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark" 
                                                        type="button" 
                                                        data-bs-toggle="dropdown" 
                                                        aria-haspopup="true" 
                                                        aria-expanded="false">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" 
                                                       href="#" 
                                                       data-bs-toggle="modal" 
                                                       data-bs-target="#modalEdit">Edit</a>
                                                    <a class="dropdown-item" 
                                                       href="#" 
                                                       data-bs-toggle="modal" 
                                                       data-bs-target="#modalDetails">Details</a>
                                                </div>
                                            </div>
                                            <form action="{{ route('products.destroy', $product) }}" 
                                                  method="POST" 
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-datatable btn-icon btn-transparent-dark" 
                                                        onclick="return confirm('Are you sure?')">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </form>
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
        </div>

        @include('productaddons.partials.product-modal')
        @include('productaddons.partials.addons-modal')
    </div>
</div>
@endsection