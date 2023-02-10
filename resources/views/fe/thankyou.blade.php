@extends('fe.layout')
@section('contents')
<div class="container">

  <div class="wrap-breadcrumb">
    <ul>
      <li class="item-link"><a href="{{ Route('home') }}" class="link">home</a></li>
      <li class="item-link"><span>Thank You</span></li>
    </ul>
  </div>
</div>

<div class="container pb-60">
  <div class="row">
    <div class="col-md-12 text-center">
      <h2>Thank you for your order</h2>
      <p>A confirmation email was sent.</p>
      <a href="{{ Route('home') }}" class="btn btn-submit btn-submitx">Continue Shopping</a>
    </div>
  </div>
</div><!--end container-->
@endsection

@section("myjs")
@endsection