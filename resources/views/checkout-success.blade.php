@extends('frontend.layout.master')
@section('title', 'All Prodruct')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h2>Order Confirmed!</h2>
                    </div>
                    <div class="card-body">
                        <i class="fas fa-check-circle fa-5x text-success mb-4"></i>
                        <h3>Thank you for your order!</h3>
                        <p class="lead">Your order has been placed successfully.</p>

                        <div class="order-summary mt-4">
                            <h4>Order Summary</h4>
                            <table class="table">
                                <tbody>
                                    @foreach ($order['items'] as $item)
                                        <tr>
                                            <td>{{ $item['name'] }} × {{ $item['quantity'] }}</td>
                                            <td class="text-right">
                                                ${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="font-weight-bold">
                                        <td>Total</td>
                                        <td class="text-right">${{ number_format($order['total'], 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <a href="{{ route('home') }}" class="btn btn-primary mt-3">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
