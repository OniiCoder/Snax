<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Order;

class LogisticsOrdersPage extends Component
{
    // use WithPagination;

    public $orders;

    public $mode = 1;
    public $orderLabel = '';

    protected $listeners = [
        'startPickup' => 'updateOrderToPickup',
        'emitDelivered' => 'updateOrderToDelivered'
    ];

    public function updateOrderToPickup($orderId) {
        $order = order::find($orderId);
        $order->status = "pickup-delivery";
        $order->save();
    }

    public function updateOrderToDelivered($orderId) {
        $order = order::find($orderId);
        $order->status = "delivered";
        $order->save();
    }


    public function mount() {
        $this->mode = 1;
        $this->orderLabel = 'Requests';
    }

    public function render()
    {
        if($this->mode == 1) {
            $this->orders = Order::where('status', '=', 'en-route')
            ->join('food_items', 'orders.food_id', '=', 'food_items.id')
            ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
            ->get();
        } else if($this->mode == 2) {
            $this->orders = Order::where('status', '=', 'pickup-delivery')
            ->join('food_items', 'orders.food_id', '=', 'food_items.id')
            ->select('orders.id as orderId', 'orders.quantity', 'orders.status', 'food_items.*')
            ->get();
        } else if($this->mode == 3) {
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

        return view('livewire.logistics-orders-page');
    }

    public function showNew () {
        $this->mode = 1;
        $this->orderLabel = 'Requests';
    }

    public function showEnRoute () {
        $this->mode = 2;
        $this->orderLabel = 'Pickup to Delivery';
    }

    public function showDelivered () {
        $this->mode = 3;
        $this->orderLabel = 'Completed/Delivered Orders';
    }
}
