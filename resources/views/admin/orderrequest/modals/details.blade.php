<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Photo Holder -->
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div class="photo-placeholder">
                            @if(isset($order->photo_path))
                                <img src="{{ asset('storage/' . $order->photo_path) }}" alt="Order Photo" class="img-fluid">
                            @else
                                <span>No Photo</span>
                            @endif
                        </div>
                    </div>  
                    <!-- Item Details -->
                    <div class="col-md-8">
                        <h6 class="fw-bold">Item Details</h6>
                        <p><strong>Name:</strong> {{ $order->item_name ?? 'N/A' }}</p>
                        <p><strong>Price:</strong> {{ $order->price ? '$' . number_format($order->price, 2) : 'N/A' }}</p>
                        <p><strong>Flavor:</strong> {{ $order->flavor ?? 'N/A' }}</p>
                        <p><strong>Size:</strong> {{ $order->size ?? 'N/A' }}</p>
                    </div>
                </div>
                <hr>
                <!-- Customer and Order Details -->
                <div>
                    <h6 class="fw-bold">Customer Details</h6>
                    <p><strong>Name:</strong> {{ $order->customer_name ?? 'N/A' }}</p>
                    <p><strong>Quantity:</strong> {{ $order->quantity ?? 'N/A' }}</p>
                    <p><strong>Pickup Date:</strong> {{ $order->pickup_date ? \Carbon\Carbon::parse($order->pickup_date)->format('M d, Y') : 'N/A' }}</p>
                    <p><strong>Payment Method:</strong> {{ $order->payment_method ?? 'N/A' }}</p>
                    <p><strong>Address:</strong> {{ $order->address ?? 'N/A' }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
.photo-placeholder {
    width: 100%; 
    height: 150px; 
    border: 2px solid black; 
    display: flex; 
    justify-content: center; 
    align-items: center;
    overflow: hidden;
}

.photo-placeholder img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}
</style>
@endpush