@extends('layouts.main')

@section('content')
<!-- Products Start -->
@foreach ($product_array as $product)
<div id="products">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8" style="left: 150px; transform: scale(0.8); top: -40px;">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{asset('img/'.$product->image)}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2>{{$product->name}}</h2>
                        @if ($product->sale_price != null)
                        <h3>{{$product->sale_price}}</h3>
                        <h4 style="text-decoration: line-through; color:red; font-weight:bold; font-size:15px;">${{$product->price}}</h4>
                        @else
                        <h3>{{$product->price}}</h3>
                        @endif
                        <p style="font-size: 22px;">{{$product->description}}</p>
                        <p><span style="color:#009688;font-weight: bold; ">In Stock  </span> {{$product->quantity}}</p>
                        <p><span style="color:#009688;font-weight: bold; ">Category  </span> {{$product->category}} - <span style="color:#009688;font-weight: bold; ">Type  </span> {{$product->type}}</p>

                        <form action="{{route('add_to_cart')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="image" value="{{$product->image}}">
                            <input type="submit" value="Add To Cart" class="btn">
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endforeach
<!-- Products End -->
@endsection

