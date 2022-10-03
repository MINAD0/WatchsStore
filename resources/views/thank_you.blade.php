@extends('layouts.main')

@section('content')

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
  <style>
    @import url('//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css');
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
  </style>
  <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
  <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
  <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1571715268998-d6e79bed5fc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80');background-size: cover">
  <header class="site-header" id="header">
    <h1 class="site-header__title" style="font-size: 1.5rem; color: #fff;" data-lead-id="site-header-title">THANK YOU FOR YOUR  ORDER!</h1>
  </header>

  <div class="main-content">
    <i class="fa fa-check main-content__checkmark" id="checkmark"></i>

    @if(Session::has('order_id') && Session::get('order_id') != null)
        <h4 style="color:#777" class="my-5"> order_id : {{Session::get('order_id')}} </h4>
    @endif
    {{-- <p class="main-content__body" data-lead-id="main-content-body">Please keep the order id in safe place for futur references. Thanks for being you.</p> --}}
    <p class="text-dark mb-4 p-4" style="font-size: 1.3rem; line-height: 2; font-weight: bold;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius: 5px;">
        Please keep the order id in safe place for futur references. Thanks for being you.<br>
        ** We will deliver your watches after 2 days **</p>
  </div>
  <a href="{{route('index')}}" class="btn btn-primary text-white"> Back To Home</a>

  <footer class="site-footer" id="footer" style="background-color: transparent;">
    <p class="p-4" id="fineprint" style="color: black; font-weight: bold" >Copyright ©2022 | All Rights Reserved</p>
  </footer>
</body>
</html>

@endsection

