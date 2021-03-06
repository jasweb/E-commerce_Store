<div class="col-md-12">
    <div class="shop-list product-item">
        <div class="product-img">
            <a href="/products/detail/{{$recentProduct->product_id}}">
                <img src="{{$recentProduct->thumbnail}}" alt=""/>
            </a>
        </div>
        <div class="product-info">
            <div class="clearfix">
                <h6 class="product-title f-left">
                    <a href="/products/detail/{{$recentProduct->product_id}}">{{$recentProduct-> name}}</a>
                </h6>
            </div>
            <h6 class="brand-name mb-30">
                {{\App\Http\Controllers\BrandsController::getName($recentProduct->brand)}}
            </h6>
            <h3 class="pro-price">            
            @if($recentProduct->sale_status)
             <div class="s-price-box"><span class="new-price">$ {{$recentProduct->sale_price}}</span>
             <span class="old-price">$ {{$recentProduct->price}}</span></div>
            @else
             <span class="new-price">$ {{$recentProduct->price}}</span>
            @endif
        </h3>
            <p style="overflow:hidden;max-height: 15ch;display: inline-block;">{{$recentProduct->description}}...</p>
            <ul class="action-button">
                <li>
                    <a onclick="loadQuickProduct({{$recentProduct->product_id}})" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                </li>
                 @if($recentProduct->quantity <= 0)
                <li>
                Out Of Stock
                </li>
                @else
                <li>
                    <a href="/cart/add/{{$recentProduct->product_id}}/1" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                </li>
                @endif
                <button onClick="removeFromWishlist('{{$recentProduct->product_id}}')" class="submit-btn-1 btn-hover-1">Remove <i class="zmdi zmdi-favorite"></i></button>
                </li>
            </ul>
        </div>
    </div>
</div>