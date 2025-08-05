@extends('frontend.layout.master')
@section('title', 'All Prodruct')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Checkout</h2>

                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Shipping Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ Auth::check() ? Auth::user()->name : '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::check() ? Auth::user()->email : '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Shipping Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Payment Method</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment_method" id="credit_card"
                                    value="credit_card" checked>
                                <label class="form-check-label" for="credit_card">
                                    Credit Card
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment_method" id="paypal"
                                    value="paypal">
                                <label class="form-check-label" for="paypal">
                                    PayPal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="bank_transfer"
                                    value="bank_transfer">
                                <label class="form-check-label" for="bank_transfer">
                                    Bank Transfer
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Complete Order</button>
                </form>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="card-body">
                        @foreach (session('cart') as $id => $item)
                            <div class="d-flex justify-content-between mb-2">
                                <span>- {{ $item['name'] }} × {{ $item['quantity'] }}</span>
                                <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                            </div>
                        @endforeach

                        <hr>

                        <div class="d-flex justify-content-between">
                            <strong>Total:</strong>
                            <strong>${{ number_format(
                                array_reduce(
                                    session('cart'),
                                    function ($carry, $item) {
                                        return $carry + $item['price'] * $item['quantity'];
                                    },
                                    0,
                                ),
                                2,
                            ) }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
