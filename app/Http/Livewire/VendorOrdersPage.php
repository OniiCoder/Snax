<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Order;

use Livewire\WithPagination;

class VendorOrdersPage extends Component
{
    // use WithPagination;

    public $orders;

    public $mode = 1;
    public $orderLabel = '';

    protected $listeners = [
        'startPreparing' => 'updateOrderToInProgress',
        'emitDone' => 'updateOrderToEnRoute'
    ];

    public function updateOrderToInProgress($orderId) {
        $order = order::find($orderId);
        $order->status = "in-progress";
        $order->save();
    }

    public function updateOrderToEnRoute($orderId) {
        $order = order::find($orderId);
        $order->status = "en-route";
        $order->save();
    }


    public function mount() {
        $this->mode = 1;
        $this->orderLabel = 'New Orders';
    }

    public function render()
    {
        if($this->mode == 1) {
            $this->orders = Order::where('status', '=', 'pending')
            ->join('food_items', 'orders.food_id', '=', 'food_items.id')
            ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
            ->get();
        } else if($this->mode == 2) {
            $this->orders = Order::where('status', '=', 'in-progress')
            ->join('food_items', 'orders.food_id', '=', 'food_items.id')
            ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
            ->get();
        } else if($this->mode == 3) {
            $this->orders = Order::where('status', '=', 'en-route')
            ->join('food_items', 'orders.food_id', '=', 'food_items.id')
            ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
            ->get();
        } else if($this->mode == 4) {
            $this->orders = Order::where('status', '=', 'delivered')
            ->join('food_items', 'orders.food_id', '=', 'food_items.id')
            ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
            ->get();
        }

        // return view('livewire.vendor-orders-page', [
        //     'orders' => Order::where('status', '=', 'pending')
        //                 ->join('food_items', 'orders.food_id', '=', 'food_items.id')
        //                 ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
        //                 ->paginate(10)
        //     ]);

        return view('livewire.vendor-orders-page');
    }

    public function showNew () {
        $this->mode = 1;
        $this->orderLabel = 'New Orders';
    }
    
    public function showInProgress () {
        $this->mode = 2;
        $this->orderLabel = 'Pending Orders';
    }

    public function showEnRoute () {
        $this->mode = 3;
        $this->orderLabel = 'Orders for pickup/deliver';
    }

    public function showDelivered () {
        $this->mode = 4;
        $this->orderLabel = 'Completed/Delivered Orders';
    }
}
