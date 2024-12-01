<div class="row">
    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <a class="text-white medium stretched-link" href="{{ route('orders.today') }}">
                            Order Today
                        </a>
                        <div class="text-lg fw-bold">{{ $todayOrdersCount }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="clipboard"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <a class="text-white medium stretched-link" href="{{ route('orders.pending') }}">
                            All Pending Orders
                        </a>
                        <div class="text-lg fw-bold">{{ $pendingOrdersCount }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="book-open"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <a class="text-white medium stretched-link" href="{{ route('orders.completed') }}">
                            Completed Orders This Month
                        </a>
                        <div class="text-lg fw-bold">{{ $completedOrdersThisMonthCount }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="check-square"></i>
                </div>
            </div>
        </div>
    </div>
</div>