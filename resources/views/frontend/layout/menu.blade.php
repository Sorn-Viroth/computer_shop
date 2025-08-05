  <!-- NAVIGATION -->
  <nav id="navigation">
      <!-- container -->
      <div class="container">
          <!-- responsive-nav -->
          <div id="responsive-nav">
              <!-- NAV -->
              <ul class="main-nav nav navbar-nav">
                  <li class="@yield('H_Active')"><a href="{{ url('/') }}">Home</a></li>
                  {{-- <li class="@yield('All_Active')"><a href="{{ url('/allProduct') }}">All Product</a></li> --}}
                  {{-- <li class="@yield('Cate_Active')"><a href="#">Categories</a></li> --}}
                  <li class="@yield('L_Active')"><a href="{{ url('/laptops') }}">Laptops</a></li>
                  <li class="@yield('SP_Active')"><a href="{{ url('/smartphone') }}">Smartphones</a></li>
                  <li class="@yield('C_Active')"><a href="{{ url('/monitor') }}">Monitor</a></li>
                  <li class="@yield('Acc_Active')"><a href="{{ url('/accessories') }}">Accessories</a></li>
              </ul>
              <!-- /NAV -->
          </div>
          <!-- /responsive-nav -->
      </div>
      <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->
