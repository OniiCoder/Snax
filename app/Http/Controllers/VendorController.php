<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\FoodItem;
use App\FoodVendor;
use Auth;

class VendorController extends Controller
{
    public function index() {
        $totalOrders = Order::get()->count();
        $totalItems = FoodItem::get()->count();
        $totalPendingOrders = Order::where('status', '=', 'pending')->get()->count();

        return view('vendor-dashboard.home', compact('totalOrders', 'totalItems', 'totalPendingOrders'));
    }

    public function orders() {
        // $items = FoodItem::orderBy('id', 'desc')->get();

        return view('vendor-dashboard.orders');
    }

    public function products() {
        return view('vendor-dashboard.products');
    }

    public function profile() {
        $user = Auth::user();

        $businessProfileNum = FoodVendor::where('user_id', '=', $user->id)->count();

        if($businessProfileNum > 0) {
            $newBusiness = FoodVendor::where('user_id', '=', $user->id)->first();

            return view('vendor-dashboard.profile', compact('businessProfileNum', 'newBusiness'));
        } else {
            return view('vendor-dashboard.profile', compact('businessProfileNum'));
        }

        
    }

    public function saveBusiness(Request $request) {

        $user = Auth::user();
         
        $newBusiness = new FoodVendor;
        $newBusiness->user_id = $user->id;
        $newBusiness->business_name = $request->input('business_name');
        $newBusiness->business_category = $request->input('business_category');
        $newBusiness->business_description = $request->input('business_description');

        $businessProfileNum = 0;


        if($newBusiness->save()) {
            $businessProfileNum = 1;
            return view('vendor-dashboard.profile', compact('businessProfileNum', 'newBusiness'));
        } else {
            return view('vendor-dashboard.profile', compact('businessProfileNum'));
        }
        

        

    }

    
}
