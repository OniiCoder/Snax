<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LogisticsOrder extends Component
{
    public $order;

    protected $listeners = [
        'startPickup' => '$refresh',
        'emitDelivered' => '$refresh'
    ];

    public function mount($order) {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.logistics-order');
    }

    public function emitPickup($orderId) {
        $this->emitUp('startPickup', $orderId);
    }

    public function emitDelivered($orderId) {
        $this->emitUp('emitDelivered', $orderId);
    }
}
