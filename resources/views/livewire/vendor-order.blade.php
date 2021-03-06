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
            <div class="odd-butt">
                @if($order->status == 'pending')
                    <button wire:click="emitPreparation({{ $order->orderId }})" class="request" style="background-color: #1ED600;">Start</button>
                @elseif($order->status == 'in-progress')
                <button wire:click="emitDone({{ $order->orderId }})" class="request" style="background-color: #1ED600;">Done</button>
                @else
                    
                @endif


                @if($order->status == 'pending')
                    <div class="in-pro">NEW</div>
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
