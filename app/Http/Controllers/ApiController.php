<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\FoodItem;
use App\Order;

class ApiController extends Controller
{
	//create new category
    public function addCategory (Request $request) {
    	$category = new Category;
    	$category->title = $request->input('title');
    	$category->description = $request->input('description');

    	if ($category->save()) {
    		return response()->json([
	    		"message" => "Category created successfully",
	    		"status" => "success",
	    		"lastInserted" => $category->id
	    	], 201);
    	}

    	return response()->json([
    		"message" => "Category failed to create",
    		"status" => "failed",
    	], 500);


    }

    //create new food item
    public function addFoodItem(Request $request) {
    	$foodItem = new FoodItem;
    	$foodItem->category_id = $request->input('category_id');
    	$foodItem->name = $request->input('name');
    	$foodItem->description = $request->input('description');
    	$foodItem->price = $request->input('price');

    	if ($foodItem->save()) {
    		return response()->json(
    			[
    				"message" => "Food Item created successfully",
    				"status" => "success",
    				"lastInserted" => $foodItem->id
    			], 201
    		);
    	}

    	return response()->json(
    			[
    				"message" => "Food Item failed to create",
    				"status" => "failed",
    			], 500
    		);

    }

    // return all food items
    public function allItems() {

    	if ($items = FoodItem::get()) {
    		$items_json = $items->toJson(JSON_PRETTY_PRINT);
    		return response(
    			[
    				"message" => "Food Items returned successfully",
					"status" => "success",
					"itemCount" => $items->count(),
					"data" => $items
    			]
    			,200);
    	}
    }

    //create new order
    public function addNewOrder(Request $request) {
    	$order = new Order;
    	$order->user_id = $request->input('user_id');
    	$order->food_id = $request->input('food_id');
    	$order->quantity = $request->input('quantity');
    	$order->status = $request->input('status');

    	if ($order->save()) {
    		return response()->json(
    			[
    				"message" => "Food Item created successfully",
    				"status" => "success",
    				"lastInserted" => $order->id
    			], 201
    		);
    	}

    	return response()->json(
    			[
    				"message" => "Food Item failed to create",
    				"status" => "failed",
    			], 500
    		);

    }

    // return all orders for a given userID
    public function item($userID) {

    	$orders = Order::where("user_id", "=", $userID)
        ->orderBy("id", "desc")
        ->get();

    	return response()->json(
    		[
    			"message" => "Orders for user with ID: " . $userID . " returned successfully",
                "status" => "success",
                "itemCount" => $orders->count(),
                "data" => $orders,
    			
    		]
    		,200);
    }

    // return all pending orders for a given userID
    public function pendingOrders($userID) {

        $orders = Order::where("user_id", "=", $userID)
        ->where("status", "=", "pending")
        ->orderBy("id", "desc")
        ->get();

        return response()->json(
            [
                "message" => "Pending orders for user with ID: " . $userID . " returned successfully",
                "status" => "success",
                "itemCount" => $orders->count(),
                "data" => $orders,
                
            ]
            ,200);
    }

    // return all completed orders for a given userID
    public function completedOrders($userID) {

        $orders = Order::where("user_id", "=", $userID)
        ->where("status", "=", "delivered")
        ->orderBy("id", "desc")
        ->get();

        return response()->json(
            [
                "message" => "Completed orders for user with ID: " . $userID . " returned successfully",
                "status" => "success",
                "itemCount" => $orders->count(),
                "data" => $orders,
                
            ]
            ,200);
    }

    
}
