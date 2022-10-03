@extends('layouts.main')

@section('content')
<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="container">


<!-- Checkout -->
<section class="my-2 py-3 checkout">
    <div class="container text-center mt-1 pt-5">
        <h2 class="text-info">CheckOut</h2>
        <hr class="mx-auto">
    </div>

    <div class="mx-auto container">
        <form id="checkout-form" action="{{route('place_order')}}" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="form-group checkout-small-element">
                        <label for="">Full Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group checkout-small-element">
                        <label for="">Email <span style="color: red">*</span></label>
                        <input type="email" class="form-control" id="checkout-email" name="email" placeholder="email address" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group checkout-small-element">
                        <label for="">Phone <span style="color: red">*</span></label>
                        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="phone number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group checkout-small-element">
                        <label for="">City <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="city" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group checkout-small-element ">
                        <label for="">Address <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="address" required>
                    </div>
                </div>

            </div>

            @if (Session::has('total'))
                @if (Session::get('total') != null)
                    <div class="form-group checkout-btn-container">
                        <p>Total amount: ${{Session::get('total')}}</p>
                        <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Checkout">
                    </div>
                @endif
            @endif
        </form>
    </div>
</section>



    </div>
</div>
<!-- Cart End -->
@endsection
