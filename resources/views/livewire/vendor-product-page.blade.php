<section class="food">
      <div class="container">
        <p class="food-head">Orders</p>
        <div class="subsub-nav">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <button class="nav-link @if($mode == 1) active @else @endif" id="subnav-link" wire:click="showAll">All</button>
            </li>
            <li class="nav-item">
              <button class="nav-link @if($mode == 2) active @else @endif" id="subnav-link" wire:click="showFoods">Food</button>
            </li>
            <li class="nav-item">
              <button class="nav-link @if($mode == 3) active @else @endif" id="subnav-link" wire:click="showDrinks">Drinks</button>
            </li>
          </ul>
        </div>
        
        <div class="row">
            @foreach($products as $product)
                @livewire('vendor-product', ['product' => $product], key($product->id))
            @endforeach
      </div>
    </section>
