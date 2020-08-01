
<div class="col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 20px;">
    <div class="food-card">
    <div>
    <div class="food-img" style="background-image: url({{ $product->photo }});" alt="{{ $product->name }}">
        <div style="color: #fff; background-color: rgba(0,0,0,0.8); padding: 10px; border-radius: 10px;">Price: <b>${{ $product->price }}</b></div>
    </div>
    </div>
    <div class="txt-box-2">
        <p class="food-title">{{ $product->name }}</p>
        <!-- <p>{{ $product->description }}</p> -->
        <div class="food-butt">
        <div class="food-but"></div>
        </div>
    </div>
    </div>
</div>


