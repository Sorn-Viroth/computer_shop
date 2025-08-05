@extends('frontend.layout.master')
@section('title', 'laptops')
@section('L_Active', 'active')
@section('content')

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    {{-- <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Categories</h3>
                        <div class="checkbox-filter">

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1">
                                <label for="category-1">
                                    <span></span>
                                    Laptops
                                    <small>(120)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-2">
                                <label for="category-2">
                                    <span></span>
                                    Smartphones
                                    <small>(740)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-3">
                                <label for="category-3">
                                    <span></span>
                                    Cameras
                                    <small>(1450)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-4">
                                <label for="category-4">
                                    <span></span>
                                    Accessories
                                    <small>(578)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-5">
                                <label for="category-5">
                                    <span></span>
                                    Laptops
                                    <small>(120)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-6">
                                <label for="category-6">
                                    <span></span>
                                    Smartphones
                                    <small>(740)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget --> --}}

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
                                    MIS
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-2">
                                <label for="brand-2">
                                    <span></span>
                                    ROG
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-3">
                                <label for="brand-3">
                                    <span></span>
                                    DELL
                                    <small>(755)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-4">
                                <label for="brand-4">
                                    <span></span>
                                    LENOVO
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-5">
                                <label for="brand-5">
                                    <span></span>
                                    ALIENWARE
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-6">
                                <label for="brand-6">
                                    <span></span>
                                    HP
                                    <small>(755)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top selling</h3>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('frontend/img/rog-1.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('frontend/img/msi-1.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('frontend/img/rog-2.jpg') }}" alt="">
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
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/alien-2.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">Dell Alienware M16 R2 ( Ultra 9 185H / 16GB
                                            / SSD 512GB PCIE / RTX4070 8GB / 16"QHD+,240Hz )</a>
                                    </h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
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
                                        <input type="hidden" name="product_id" value="5">
                                        <input type="hidden" name="product_name" value="Dell Alienware M16 R2   ">
                                        <input type="hidden" name="price" value="980.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/msi-2.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">MSI CYBORG 14 A13VE-029KH (17 1362OH / 16GB / SSD TTB PCIE /
                                            RTX4050 6GB / 14"FHD+,144Hz)</a>
                                    </h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
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
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="hidden" name="product_name" value="MSI CYBORG 14 A13VE-029KH">
                                        <input type="hidden" name="price" value="980.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/rog-1.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">Asus ROG Strix G18 G814JU-N6128W( I7
                                            13650HX / 16GB / SSD 512GB PCIE / RTX4050 6GB / 18"QHD+,240Hz )</a>
                                    </h3>
                                    <h4 class="product-price">$880.00 <del class="product-old-price">$990.00</del></h4>
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
                                        <input type="hidden" name="product_id" value="2">
                                        <input type="hidden" name="product_name"
                                            value="Asus ROG Strix G18 G814JU-N6128W">
                                        <input type="hidden" name="price" value="880.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-lg visible-md"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/rog-2.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">Asus ROG Strix G18 G814JU-N6128W( I7
                                            13650HX / 16GB / SSD 512GB PCIE / RTX4050 6GB / 18"QHD+,240Hz )</a>
                                    </h3>
                                    <h4 class="product-price">$880.00 <del class="product-old-price">$990.00</del></h4>
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
                                        <input type="hidden" name="product_id" value="3">
                                        <input type="hidden" name="product_name"
                                            value="Asus ROG Strix G18 G814JI-N6126W">
                                        <input type="hidden" name="price" value="780.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">

                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/rog-2.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">MSI Stealth 16 Mercedes-AMG Motorsport
                                            A13VG ( I9 13900H / 32GB / SSD 2TB PCIE / RTX4070 8GB / 16"UHD )</a>
                                    </h3>
                                    <h4 class="product-price">$880.00 <del class="product-old-price">$990.00</del></h4>
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
                                        <input type="hidden" name="product_id" value="4">
                                        <input type="hidden" name="product_name"
                                            value="MSI Stealth 16 Mercedes-AMG Motorsport
                                            A13VG">
                                        <input type="hidden" name="price" value="1290.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">


                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/lenovo-1.jpg') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name">
                                        <a href="#">Lenovo Legion 5Pro 16IRX9 ( I9 14900HX /
                                            32GB / SSD 1TB PCIE / RTX4070 8GB / 16"2K,240Hz )</a>
                                    </h3>
                                    <h4 class="product-price">$880.00 <del class="product-old-price">$990.00</del></h4>
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
                                        <input type="hidden" name="product_id" value="6">
                                        <input type="hidden" name="product_name" value="Lenovo Legion 5Pro 16IRX9 ">
                                        <input type="hidden" name="price" value="800.00">
                                        <button type="submit" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i> add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

                        <!-- product -->

                        <!-- /product -->


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
