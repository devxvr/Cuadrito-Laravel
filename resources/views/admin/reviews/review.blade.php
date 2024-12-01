@extends('admin.layouts.app')

@section('title', 'Reports - Cuadrito Bakeshop')

@section('header')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="edit-2"></i></div>
                        Reviews
                    </h1>
                    <div class="page-header-subtitle"></div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="container-xl px-4 mt-3">
            <div class="card mb-4">
                <div class="card-header">Custom Table</div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Review ID</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Type of Review</th>
                                <th>Contact Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review) <!-- Loop through the reviews -->
                            <tr>
                                <td>{{ $review->id }}</td>
                                <td>{{ $review->customer_name }}</td>
                                <td>{{ $review->email }}</td>
                                <td>{{ $review->review_type }}</td>
                                <td>{{ $review->contact_number }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Trigger Modal -->
                                        <button 
                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2" 
                                            type="button" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#detailsModal{{ $review->id }}">
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

    <!-- Modals for each review -->
    @foreach ($reviews as $review)
    <div class="modal fade" id="detailsModal{{ $review->id }}" tabindex="-1" aria-labelledby="detailsModalLabel{{ $review->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel{{ $review->id }}">Item Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customerName{{ $review->id }}" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName{{ $review->id }}" value="{{ $review->customer_name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email{{ $review->id }}" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email{{ $review->id }}" value="{{ $review->email }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber{{ $review->id }}" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" id="contactNumber{{ $review->id }}" value="{{ $review->contact_number }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="productReview{{ $review->id }}" class="form-label">Product to Review</label>
                        <input type="text" class="form-control" id="productReview{{ $review->id }}" value="{{ $review->product_review }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="message{{ $review->id }}" class="form-label">Message</label>
                        <textarea class="form-control" id="message{{ $review->id }}" rows="3" readonly>{{ $review->message }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>