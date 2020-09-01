<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\FoodItem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        $totalOrders = Order::get()->count();
        $totalItems = FoodItem::get()->count();
        $totalPendingOrders = Order::where('status', '=', 'pending')->get()->count();

        return view('vendor-dashboard.home', compact('totalOrders', 'totalItems', 'totalPendingOrders'));
    }
}
