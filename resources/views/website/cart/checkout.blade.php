@extends('website.master')

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">checkout</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="{{route('home')}}">Shop</a></li>
                        <li>checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="true" aria-controls="collapseFour">Shipping Address</h6>
                                <form action="{{route('new-order')}}" method="POST">
                                    @csrf

                                    <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Full Name</label>
                                                    <div class="row">
                                                        <div class="col-md-12 form-input form">
                                                            @if(isset($Customer->name))
                                                                <input type="text" name="name" value="{{$Customer->name}}">
                                                            @else
                                                                <input type="text" name="name" placeholder="Full Name">
                                                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Email Address</label>
                                                    <div class="form-input form">
                                                        @if(isset($Customer->email))
                                                            <input type="email" name="email" value="{{$Customer->email}}">
                                                        @else
                                                        <input type="email" name="email" placeholder="Email Address">
                                                            <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>Phone Number</label>
                                                    <div class="form-input form">
                                                        @if(isset($Customer->mobile))
                                                            <input type="number" name="mobile" value="{{$Customer->mobile}}">
                                                        @else
                                                        <input type="number" name="mobile" placeholder="Phone Number">
                                                            <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Delivery Address</label>
                                                    <div class="form-input form">
                                                        <textarea name="delivery_address" placeholder="Delivery Address"></textarea>
                                                            <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                            <div class="col-md-12">--}}
                                            {{--                                                <div class="single-checkbox checkbox-style-3">--}}
                                            {{--                                                    <input type="checkbox" id="checkbox-3">--}}
                                            {{--                                                    <label for="checkbox-3"><span></span></label>--}}
                                            {{--                                                    <p>My delivery and mailing addresses are the same.</p>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}

                                            <div class="col-md-12">
                                                <div class="checkout-payment-option">
                                                    <h6 class="heading-6 font-weight-400 payment-title">Select Delivery
                                                        Option</h6>
                                                    <div class="payment-option-wrapper">
                                                        <div class="single-payment-option">
                                                            <input type="radio" name="payment_method" checked id="shipping-1" value="1">
                                                            <label for="shipping-1">
                                                                <img
                                                                    src="{{asset('/')}}website/assets/images/shipping/shipping-1.png" alt="Sipping">
                                                                <p>Cash On Delivery</p>
                                                                <span class="price">$10.50</span>
                                                            </label>
                                                        </div>
                                                        <div class="single-payment-option">
                                                            <input type="radio" name="payment_method" id="shipping-2" value="2">
                                                            <label for="shipping-2">
                                                                <img
                                                                    src="{{asset('/')}}website/assets/images/shipping/shipping-2.png" alt="Sipping">
                                                                <p>Online Shipping</p>
                                                                <span class="price">$10.50</span>
                                                            </label>
                                                        </div>
                                                        <div class="single-payment-option">
                                                            <input type="radio" name="payment_method" id="shipping-3" value="3">
                                                            <label for="shipping-3">
                                                                <img
                                                                    src="{{asset('/')}}website/assets/images/shipping/shipping-3.png" alt="Sipping">
                                                                <p>Standerd Shipping</p>
                                                                <span class="price">$10.50</span>
                                                            </label>
                                                        </div>
                                                        <div class="single-payment-option">
                                                            <input type="radio" name="payment_method" id="shipping-4" value="4">
                                                            <label for="shipping-4">
                                                                <img
                                                                    src="{{asset('/')}}website/assets/images/shipping/shipping-4.png" alt="Sipping">
                                                                <p>Standerd Shipping</p>
                                                                <span class="price">$10.50</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button class="btn" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false"
                                                            aria-controls="collapseFour">Confirm Order
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-price-table">
                            <h5 class="title">Pricing Table</h5>
                            <div class="sub-total-price">
                                @php($sum=0)
                                @foreach($CartProduct as $cartproduct)
                                    <div class="total-price">
                                        <p class="value">{{$cartproduct->name}}: ({{$cartproduct->price}}
                                            *{{$cartproduct->quantity}})</p>
                                        <p class="price">{{number_format($cartproduct->price*$cartproduct->quantity)}}
                                            <span> &#2547 </span></p>
                                    </div>
                                    @php($sum = $sum + ($cartproduct->price*$cartproduct->quantity))
                                @endforeach
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Subotal Price:</p>
                                    <p class="price">{{number_format($sum)}}<span> &#2547 </span></p>
                                </div>
                                <div class="payable-price">
                                    <p class="value">Tax Amount:</p>
                                    @php($tax = round(($sum*15)/100))
                                    <p class="price">{{$tax}}<span> &#2547 </span></p>
                                </div>
                                <div class="payable-price">
                                    <p class="value">Shipping Free:</p>
                                    @php($shipping = 500)
                                    <p class="price">{{$shipping}}<span> &#2547 </span></p>
                                </div>
                                <div class="payable-price">
                                    <p class="value">Total payable:</p>
                                    @php($grandtotal=$sum+$tax+$shipping)
                                    <p class="price">{{number_format($grandtotal)}}<span> &#2547 </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-sidebar-banner mt-30">
                            <a href="product-grids.html">
                                <img src="{{asset('/')}}website/assets/images/banner/banner.jpg" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
