@extends('layouts.main')

@section('content')
<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
            <h1 class="display-4">Serving Since 1950</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Story</h1>
                <h5 class="mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5>
                <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod</p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('img/watch-features.png')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Vision</h1>
                <p>At Watch, you can guarantee you will find more watch brands than anywhere else. From the biggest designer brands, to the best of luxury and some hidden gems, along with outstanding service and next day delivery, WatchShop is the hottest place to buy your next watch.</p>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Smart Watch</h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>BOSS Watch </h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>CASIO Watch</h5>
                <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
