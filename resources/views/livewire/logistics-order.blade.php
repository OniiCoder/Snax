<div class="col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 20px;">
    <div class="odd-card">
        <div>
        <div class="food-img" style="background-image: url({{ $order->photo }});" alt="{{ $order->title }}">
        <div style="color: #fff; background-color: rgba(0,0,0,0.8); padding: 10px; border-radius: 10px;">Quantity: <b>{{ $order->quantity }}</b></div>
    </div>
        </div>
        <div class="txt-box-1">
            <p class="odd-title">{{ $order->name }}</p>
            <p class="odd-sub">Order id: <span><b>#{{ $order->orderId }}</b></span></p>
            <p class="address">10,Yamu Street, Demola Estate, Lagos</p>
            @if($order->status == 'en-route')
                <p class="tel" style="color: red; font-size: 10px;">Accept this order to see phone number</p>
            @else 
                <p class="tel"  style="text-decoration: underline;"><a class="tel" href="tel:0801000000">0801000000</a></p>
            @endif
            <div class="odd-butt">
                @if($order->status == 'en-route')
                    <button wire:click="emitPickup({{ $order->orderId }})" class="request" style="background-color: #1ED600;">Pickup</button>
                @elseif($order->status == 'pickup-delivery')
                <button wire:click="emitDelivered({{ $order->orderId }})" class="request" style="background-color: #1ED600; width: 100%;">Confirm Delivery</button>
                @else
                    
                @endif


                @if($order->status == 'en-route')
                    <div class="in-pro">Ready</div>
                @elseif($order->status == 'in-progress')
                    <div class="in-pro">In-progress</div>
                @elseif($order->status == 'en-route')
                    <div class="in-pro">En-route</div>
                @elseif($order->status == 'delivered')
                    <div class="delivered">{{ $order->status }}</div>
                @else
                    
                @endif
            </div>
        </div>
    </div>
</div>
