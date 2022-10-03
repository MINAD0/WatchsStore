@extends('layouts.main')

@section('content')
<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                At Watch, you can guarantee you will find more watch brands than anywhere else.
            </p>
        </div>
        <div class="row align-items-center">
            @foreach ($products as $product)
            <div class="col-md-3 mb-2">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{asset('img/'.$product->image)}}" style="width: 100px; height:100px;" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2><a href="{{route('single_product',['id'=>$product->id])}}">{{$product->name}}</a></h2>
                        @if ($product->sale_price != null)
                        <h3>{{$product->sale_price}}</h3>
                        <h4 style="text-decoration: line-through; color:red; font-weight:bold; font-size:13px;">${{$product->price}}</h4>
                        @else
                        <h3>{{$product->price}}</h3>
                        @endif
                        <a class="btn" href="{{route('single_product',['id'=>$product->id])}}">Buy Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
</div>
<!-- Products End -->
@endsection
