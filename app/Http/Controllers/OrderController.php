<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display orders scheduled for today
     */
    public function today()
    {
        $stats = [
            'ordersToday' => Order::whereDate('delivery_date', Carbon::today())->count(),
            'pendingOrders' => Order::where('status', 'pending')->count(),
            'completedOrdersThisMonth' => Order::where('status', 'completed')
                ->whereMonth('completed_at', Carbon::now()->month)
                ->count()
        ];

        $orders = Order::with(['customer', 'products', 'addons'])
            ->whereDate('delivery_date', Carbon::today())
            ->orderBy('delivery_time')
            ->paginate(15);

        return view('orders.today', compact('orders', 'stats'));
    }

    /**
     * Display all pending orders
     */
    public function pending()
    {
        $orders = Order::with(['customer', 'products', 'addons'])
            ->where('status', 'pending')
            ->orderBy('delivery_date')
            ->orderBy('delivery_time')
            ->paginate(15);

        return view('orders.pending', compact('orders'));
    }

    /**
     * Display completed orders for current month
     */
    public function completed()
    {
        $orders = Order::with(['customer', 'products', 'addons'])
            ->where('status', 'completed')
            ->whereMonth('completed_at', Carbon::now()->month)
            ->orderBy('completed_at', 'desc')
            ->paginate(15);

        return view('orders.completed', compact('orders'));
    }

    /**
     * Display specific order details
     */
    public function show(Order $order)
    {
        $order->load(['customer', 'products', 'addons']);
        
        return view('orders.show', compact('order'));
    }

    /**
     * Mark an order as completed
     */
    public function markAsCompleted(Order $order)
    {
        $order->update([
            'status' => 'completed',
            'completed_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Order marked as completed successfully');
    }

    /**
     * Get order details for AJAX requests
     */
    public function getDetails(Order $order)
    {
        return response()->json(
            $order->load(['customer', 'products', 'addons'])
        );
    }
}