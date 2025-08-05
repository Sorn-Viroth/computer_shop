@extends('frontend.layout.master')
@section('title', 'Camera')
@section('C_Active', 'active')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Price</h3>
                        <div class="price-filter">
                            <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
                                {{-- <div class="noUi-base">
                                    <div class="noUi-origin" style="left: 0%;">
                                        <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                            role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                            aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00"
                                            style="z-index: 5;"></div>
                                    </div>
                                    <div class="noUi-connect" style="left: 0%; right: 0%;"></div>
                                    <div class="noUi-origin" style="left: 100%;">
                                        <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                            role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                            aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00"
                                            style="z-index: 4;"></div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Brand</h3>
                        <div class="checkbox-filter">
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-1">
                                <label for="brand-1">
                                    <span></span>
                                    ASUS
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-2">
                                <label for="brand-2">
                                    <span></span>
                                    MSI
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-3">
                                <label for="brand-3">
                                    <span></span>
                                    AIWA
                                    <small>(755)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-4">
                                <label for="brand-4">
                                    <span></span>
                                    AOC
                                    <small>(578)</small>
                                </label>
                            </div>
                            {{-- <div class="input-checkbox">
                                <input type="checkbox" id="brand-5">
                                <label for="brand-5">
                                    <span></span>
                                    VIVO
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-6">
                                <label for="brand-6">
                                    <span></span>
                                    NOTHING
                                    <small>(755)</small>
                                </label>
                            </div> --}}
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top selling</h3>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('frontend/img/m-1.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('frontend/img/m-3.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('frontend/img/m-2.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        <!-- product -->
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/m-1.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">Aiwa MP3429-Y Gaming Monitor ( 2K Curved /
                                            VA Panel / 165Hz / 34" / 3 Years warranty )</a>
                                    </h3>
                                    <h4 class="product-price">$350.00 <del class="product-old-price">$950.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="11">
                                        <input type="hidden" name="product_name" value="Aiwa MP3429-Y Gaming Monitor">
                                        <input type="hidden" name="price" value="350.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/m-2.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">AIWA MQ3207-Y ( 32" / 2K QHD ( 2560 x 1440
                                            ) / IPS / 60Hz / sRGB %: 100% / 3 Years warranty )</a>
                                    </h3>
                                    <h4 class="product-price">$400.00 <del class="product-old-price">$950.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="12">
                                        <input type="hidden" name="product_name" value="AIWA MQ3207-Y ">
                                        <input type="hidden" name="price" value="400.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i>
                                            add to cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /product -->

                        {{-- <div class="clearfix visible-sm visible-xs"></div> --}}

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/m-3.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">ASUS ROG Strix XG27ACG ( 27" / 2K IPS /
                                            180Hz / Type-C / HDR400 / RGB Logo )</a>
                                    </h3>
                                    <h4 class="product-price">$150.00 <del class="product-old-price">$950.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="13">
                                        <input type="hidden" name="product_name" value="ASUS ROG Strix XG27ACG ">
                                        <input type="hidden" name="price" value="150.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i>
                                            add to cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- /product -->

                    <!-- product -->

                    <!-- /product -->

                    {{--  --}}
                    <!-- /product -->
                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing 20-100 products</span>
                    <ul class="store-pagination">
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
@endsection
