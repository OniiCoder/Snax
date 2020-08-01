<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;

use App\FoodItem;

class VendorProductPage extends Component
{
    public $products = [];

    public $mode;

    public function mount() {
        // $this->products = FoodItem::orderBy('id', 'desc')->get();
        $this->mode = 1;
    }

    public function render()
    {
        if($this->mode == 1) {
            $this->products = FoodItem::orderBy('id', 'desc')
            ->get();


        } else if($this->mode == 2) {
            $this->products = FoodItem::where('category_id', 2)
            ->orderBy('id', 'desc')
            ->get();
        } else if($this->mode == 3) {
            $this->products = FoodItem::where('category_id', 3)
            ->orderBy('id', 'desc')
            ->get();
        }

        return view('livewire.vendor-product-page');
    }



    public function showAll () {
        $this->mode = 1;
    }
    
    public function showFoods () {
        $this->mode = 2;
    }

    public function showDrinks () {
        $this->mode = 3;
    }
}
