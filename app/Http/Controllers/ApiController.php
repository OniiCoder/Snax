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
}
