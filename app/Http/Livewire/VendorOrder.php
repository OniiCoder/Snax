<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VendorOrder extends Component
{
    public $order;

    protected $listeners = [
        'startPreparing' => '$refresh',
        'emitDone' => '$refresh'
    ];

    public function mount($order) {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.vendor-order');
    }

    public function emitPreparation($orderId) {
        $this->emitUp('startPreparing', $orderId);
    }

    public function emitDone($orderId) {
        $this->emitUp('emitDone', $orderId);
    }
}
