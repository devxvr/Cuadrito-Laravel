<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        // Get today's orders count
        $todayOrdersCount = Order::whereDate('created_at', Carbon::today())->count();

        // Get all pending orders count
        $pendingOrdersCount = Order::where('status', 'pending')->count();

        // Get completed orders count for current month
        $completedOrdersCount = Order::where('status', 'completed')
            ->whereMonth('completed_at', Carbon::now()->month)
            ->count();

        // Get earnings data for chart
        $earningsData = $this->getEarningsData();

        // Get sales by product data for chart
        $productSalesData = $this->getProductSalesData();

        // Get sales by barangay data for pie chart
        $barangaySalesData = $this->getBarangaySalesData();

        // Get recent completed orders for table
        $completedOrders = Order::with(['customer', 'products'])
            ->where('status', 'completed')
            ->orderBy('completed_at', 'desc')
            ->paginate(10);

        return view('reports.index', compact(
            'todayOrdersCount',
            'pendingOrdersCount',
            'completedOrdersCount',
            'earningsData',
            'productSalesData',
            'barangaySalesData',
            'completedOrders'
        ));
    }

    private function getEarningsData()
    {
        // Get earnings for the last 12 months
        return Order::where('status', 'completed')
            ->where('completed_at', '>=', Carbon::now()->subMonths(12))
            ->select(
                DB::raw('sum(total_amount) as total'),
                DB::raw("DATE_FORMAT(completed_at, '%M %Y') as month")
            )
            ->groupBy('month')
            ->orderBy('completed_at')
            ->get();
    }

    private function getProductSalesData()
    {
        // Get sales data by product for the current month
        return DB::table('order_product')
            ->join('products', 'order_product.product_id', '=', 'products.id')
            ->join('orders', 'order_product.order_id', '=', 'orders.id')
            ->where('orders.status', 'completed')
            ->whereMonth('orders.completed_at', Carbon::now()->month)
            ->select(
                'products.name',
                DB::raw('count(*) as total_sales'),
                DB::raw('sum(order_product.quantity) as total_quantity')
            )
            ->groupBy('products.id', 'products.name')
            ->orderBy('total_sales', 'desc')
            ->get();
    }

    private function getBarangaySalesData()
    {
        // Get sales data by barangay
        return Order::where('status', 'completed')
            ->whereMonth('completed_at', Carbon::now()->month)
            ->select('delivery_barangay', DB::raw('count(*) as total_orders'))
            ->groupBy('delivery_barangay')
            ->get();
    }
}