<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\FoodItem;

class VendorController extends Controller
{
    public function index() {
        $totalOrders = Order::get()->count();
        $totalItems = FoodItem::get()->count();
        return view('vendor-dashboard.home', compact('totalOrders', 'totalItems'));
    }

    public function orders() {
        // $items = FoodItem::orderBy('id', 'desc')->get();

        return view('vendor-dashboard.orders');
    }

    public function products() {
        return view('vendor-dashboard.products');
    }

    
}
