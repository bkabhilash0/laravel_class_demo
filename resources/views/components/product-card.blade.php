@props([
    "name" => "Adidas New Hammer sole for Sports person",
    "slug",
    "imgUrl",
    "price",
    "class" => ""
])

<div {{$attributes->merge([
    "class" => "col-lg-3 col-md-6 ".$class
//    "class" => "col-lg-3 col-md-6 "
])}}>
    <div class="single-product">
        <img class="img-fluid" src="{{$imgUrl}}" alt="">
{{--        <img class="img-fluid" src="{{asset("img/product/p2.jpg")}}" alt="">--}}
        <div class="product-details">
            <a href="{{route("product.detail",$slug)}}"><h6>{{$name}}</h6></a>
{{--            <a href="/"><h6>Sample product</h6></a>--}}
            <div class="price">
                <h6>${{$price}}</h6>
{{--                <h6>150</h6>--}}
                <h6 class="l-through">$210.00</h6>
            </div>
            <div class="prd-bottom">

                <a href="" class="social-info">
                    <span class="ti-bag"></span>
                    <p class="hover-text">add to bag</p>
                </a>
                <a href="" class="social-info">
                    <span class="lnr lnr-heart"></span>
                    <p class="hover-text">Wishlist</p>
                </a>
                <a href="" class="social-info">
                    <span class="lnr lnr-sync"></span>
                    <p class="hover-text">compare</p>
                </a>
                <a href="" class="social-info">
                    <span class="lnr lnr-move"></span>
                    <p class="hover-text">view more</p>
                </a>
            </div>
        </div>
    </div>
</div>
