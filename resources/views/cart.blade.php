@extends('frontend.layout.master')
@section('title', 'All Prodruct')
@section('content')
    {{-- <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Checkout</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="last-name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    Create Account?
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                    <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Details -->

                    <!-- Shiping Details -->
                    <div class="shiping-details">
                        <div class="section-title">
                            <h3 class="title">Shiping address</h3>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="shiping-address">
                            <label for="shiping-address">
                                <span></span>
                                Ship to a diffrent address?
                            </label>
                            <div class="caption">
                                <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="last-name" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="country" placeholder="Country">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="tel" placeholder="Telephone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Shiping Details -->

                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" placeholder="Order Notes"></textarea>
                    </div>
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>QTY</strong></div>
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            <div class="order-col">
                                <div> 1x</div>
                                <div> Product Name Goes Here</div>
                                <div>$980.00</div>
                            </div>

                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">$2940.00</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Direct Bank Transfer
                            </label>
                            <div class="caption">
                                <p>magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Cheque Payment
                            </label>
                            <div class="caption">
                                <p>magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                Paypal System
                            </label>
                            <div class="caption">
                                <p>magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms &amp; conditions</a>
                        </label>
                    </div>
                    <a href="#" class="primary-btn order-submit">Place order</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div> --}}



    <div class="container">
        <h2>Your Shopping Cart</h2>

        @if (session('cart'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') as $id => $details)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div class="ml-3">{{ $details['name'] }}</div>
                                </div>
                            </td>
                            <td>${{ $details['price'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>${{ $details['price'] * $details['quantity'] }}</td>
                            <td>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td><strong>Total:
                                ${{ array_reduce(session('cart'),function ($carry, $item) {return $carry + $item['price'] * $item['quantity'];},0) }}</strong>
                        </td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

            <div class="text-right">
                <a href="{{ route('checkout.show') }}" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        @else
            <div class="alert alert-info">
                Your cart is empty. <a href="{{ route('home') }}">Continue shopping</a>
            </div>
        @endif
    </div>

@endsection
