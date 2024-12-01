@extends('admin.layouts.app')

@section('title', 'Deals and Offer')

@section('header')
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="tag"></i></div>
                                Deals and Offer
                            </h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @endsection


        @section('content')
<div class="container-xl px-4">
    <div class="card mt-n10" style="background-color: #D9D9D9;">
        <div class="card-body">
            <form action="{{ route('discounts.store') }}" method="POST">
                @csrf
                <div class="row">
                    @foreach([
                        'senior_citizen' => 'Senior Citizen Discount', 
                        'pwd' => 'PWD Discount', 
                        'whole_sale' => 'Whole Sale Discount',
                        'special_offer' => 'Special Offer Discount',
                        'custom_cake' => 'Custom Cake Orders',
                        'seasonal_sale' => 'Seasonal Cake Sales',
                        'product_table' => 'Product Table'
                    ] as $type => $label)
                        <div class="col-md-6 mb-3">
                            <div class="card bg-light text-black shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <p class="mb-0">{{ $label }}</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            @php
                                                $discount = $discounts->firstWhere('type', $type)
                                            @endphp
                                            
                                            @if(in_array($type, ['custom_cake', 'seasonal_sale', 'product_table']))
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" 
                                                           type="checkbox" 
                                                           name="is_enabled" 
                                                           id="{{ $type }}_toggle"
                                                           {{ $discount->is_enabled ?? false ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="{{ $type }}_toggle">
                                                        {{ $discount->is_enabled ?? false ? 'On' : 'Off' }}
                                                    </label>
                                                </div>
                                            @else
                                                <div class="d-flex align-items-center">
                                                    <input type="number" 
                                                           class="form-control me-2" 
                                                           name="percentage" 
                                                           value="{{ $discount->percentage ?? 0 }}" 
                                                           placeholder="0%" 
                                                           style="width: 90px">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" 
                                                               type="checkbox" 
                                                               name="is_enabled" 
                                                               id="{{ $type }}_toggle"
                                                               {{ $discount->is_enabled ?? false ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="{{ $type }}_toggle">
                                                            {{ $discount->is_enabled ?? false ? 'On' : 'Off' }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                            <input type="hidden" name="type" value="{{ $type }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save Discounts</button>
                    </div>
                </div>
            </form>
                
                
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.querySelectorAll('.form-check-input').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const label = this.nextElementSibling;
            label.textContent = this.checked ? 'On' : 'Off';
        });
    });
</script>
@endpush