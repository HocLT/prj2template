@extends('fe.layout')
@section('contents')
<div class="container">

  <div class="wrap-breadcrumb">
    <ul>
      <li class="item-link"><a href="{{ Route('home') }}" class="link">home</a></li>
      <li class="item-link"><span>login</span></li>
    </ul>
  </div>
  <div class=" main-content-area">
    <form action="{{ Route('processCheckout') }}" method="post" name="frm-billing">
      @csrf
    <div class="wrap-address-billing">
      <h3 class="box-title">Billing Address</h3>
      
        <p class="row-in-form">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="shipping_name" value="{{ Session::get('user')->name }}" placeholder="Your name">
        </p>
        <p class="row-in-form">
          <label for="email">Email Addreess:</label>
          <input id="email" type="email" name="shipping_email" value="{{ Session::get('user')->email }}" placeholder="Type your email">
        </p>
        <p class="row-in-form">
          <label for="phone">Phone number<span>*</span></label>
          <input id="phone" type="number" name="shipping_phone" value="{{ Session::get('user')->phone }}" placeholder="10 digits format">
        </p>
        <p class="row-in-form">
          <label for="add">Address:</label>
          <input id="add" type="text" name="shipping_address" value="" placeholder="Street at apartment number">
        </p>
    </div>
    <div class="summary summary-checkout">
      <div class="summary-item payment-method">
        <h4 class="title-box">Payment Method</h4>
        <p class="summary-info"><span class="title">Check / Money order</span></p>
        <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
        <div class="choose-payment-methods">
          <label class="payment-method">
            <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
            <span>COD</span>
            <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
          </label>
          <label class="payment-method">
            <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
            <span>visa</span>
            <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
          </label>
          <label class="payment-method">
            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
            <span>Paypal</span>
            <span class="payment-desc">You can pay with your credit</span>
            <span class="payment-desc">card if you don't have a paypal account</span>
          </label>
        </div>
        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">{{ $total }} đ</span></p>
        <button type="submit" class="btn btn-medium">Place order now</button>
      </div>
      <div class="summary-item shipping-method">
        <h4 class="title-box f-title">Shipping method</h4>
        <p class="summary-info"><span class="title">Flat Rate</span></p>
        <p class="summary-info"><span class="title">Fixed $50.00</span></p>
        <h4 class="title-box">Discount Codes</h4>
        <p class="row-in-form">
          <label for="coupon-code">Enter Your Coupon code:</label>
          <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
        </p>
        <a href="#" class="btn btn-small">Apply</a>
      </div>
    </div>
    </form>
    <div class="wrap-show-advance-info-box style-1 box-in-site">
      <h3 class="title-box">Most Viewed Products</h3>
      <div class="wrap-products">
        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item new-label">new</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><span class="product-price">$250.00</span></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_17.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item sale-label">sale</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_15.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item new-label">new</span>
                <span class="flash-item sale-label">sale</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_01.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item bestseller-label">Bestseller</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><span class="product-price">$250.00</span></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_21.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><span class="product-price">$250.00</span></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_03.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item sale-label">sale</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_04.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item new-label">new</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><span class="product-price">$250.00</span></div>
            </div>
          </div>

          <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
              <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="assets/images/products/digital_05.jpg" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
              </a>
              <div class="group-flash">
                <span class="flash-item bestseller-label">Bestseller</span>
              </div>
              <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
              </div>
            </div>
            <div class="product-info">
              <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
              <div class="wrap-price"><span class="product-price">$250.00</span></div>
            </div>
          </div>
        </div>
      </div><!--End wrap-products-->
    </div>

  </div><!--end main content area-->
</div><!--end container-->
@endsection

@section("myjs")
<script>
  $(".quantity-input").on('click', '.btn', function(event) {
    event.preventDefault();
    var _this = $(this),
      _input = _this.siblings('input[name=product-quantity]'),
      _current_value = _this.siblings('input[name=product-quantity]').val(),
      _max_value = _this.siblings('input[name=product-quantity]').attr('data-max');
    if(_this.hasClass('btn-reduce')){
      if (parseInt(_current_value, 10) > 1) _input.val(parseInt(_current_value, 10) - 1);
    }else {
      if (parseInt(_current_value, 10) < parseInt(_max_value, 10)) _input.val(parseInt(_current_value, 10) + 1);
    }
    let pid = _input.data("id");
    let quantity = _this.siblings('input[name=product-quantity]').val();
    
    $.ajax({
        type: 'post',
        url: "{{ Route('changeCart') }}",     // url?pid=3&quantity=1&_token=23423
        data: {
            pid: pid, 
            quantity: quantity, 
            _token: '{{ csrf_token() }}',
        }, success: function(data) {
            alert('update cart success.')
            location.reload();
        }
    });
  });

  $('.btn-delete').click(function(e) {
    e.preventDefault();
    let pid = $(this).data("id");
    $.ajax({
        type: 'post',
        url: "{{ Route('removeCart') }}",     // url?pid=3&quantity=1&_token=23423
        data: {
            pid: pid, 
            _token: '{{ csrf_token() }}',
        }, success: function(data) {
            alert('update cart success.')
            location.reload();
        }
    });
  });
</script>
@endsection