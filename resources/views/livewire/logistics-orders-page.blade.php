<section class="odd">
      <div class="container">
        <p class="odd-head">{{ $orderLabel }}</p>
        <div class="subsub-nav">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <button class="nav-link @if($mode == 1) active @else @endif" id="subnav-link" wire:click="showNew">New</button>
            </li>
            <li class="nav-item">
              <button class="nav-link @if($mode == 2) active @else @endif" id="subnav-link" wire:click="showEnRoute">Enroute</button>
            </li>
            <li class="nav-item">
              <button class="nav-link @if($mode == 3) active @else @endif" id="subnav-link" wire:click="showDelivered">Delivered</button>
            </li>
          </ul>
        </div>
        <div class="row">
            @foreach($orders as $order)
                @livewire('logistics-order', ['order' => $order], key($order->orderId))
            @endforeach

            
          
        </div>
      </div>
    </section>