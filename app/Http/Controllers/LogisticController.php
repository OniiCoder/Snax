<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\FoodItem;

class LogisticController extends Controller
{
    public function index() {
        $totalOrders = Order::get()->count();
        $totalAvailableRequests = Order::where('status', '=', 'en-route')
        ->get()
        ->count();
        $totalPendingOrders = Order::where('status', '=', 'pending')->get()->count();

        return view('logistics-dashboard.home', compact('totalOrders', 'totalAvailableRequests', 'totalPendingOrders'));
    }

    public function orders() {
        return view('logistics-dashboard.orders');
    }
}
