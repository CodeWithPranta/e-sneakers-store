<header class="main-header-wrapper position-relative">
    <div class="header-middle">
      <div class="container pt--0 pb--0">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="header-middle-align">
              <div class="header-middle-align-start">
                <div class="header-logo-area">
                  <a href="{{url('/')}}">
                    <img class="logo-main" src="{{asset('frontend/assets/img/logo.png')}}" width="131" height="34" alt="Logo" />
                  </a>
                </div>
              </div>
              <div class="header-middle-align-center">
                <div class="header-search-area">
                  <form class="header-searchbox">
                    <input type="search" class="form-control" placeholder="Search">
                    <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="header-middle-align-end">
                <div class="header-action-area">
                  <div class="shopping-search">
                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                  </div>

                  @if(Route::has('login'))
                  <div class="shopping-wishlist">
                    @auth
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->first_name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="{{route('profile.show')}}">{{__('Profile')}}</a></li>
                          <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                          </li>
                        </ul>
                    </div>
                    @else
                    <a class="shopping-wishlist-btn" href="{{route('register')}}">
                        <i class="pe-7s-user icon"></i>
                    </a>
                    @endauth
                  </div>
                  @endif

                  <div class="shopping-cart">
                    <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                      <i class="pe-7s-shopbag icon"></i>
                      <sup class="shop-count">02</sup>
                    </button>
                  </div>
                  <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                    <i class="pe-7s-menu"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area header-default">
      <div class="container">
        <div class="row no-gutter align-items-center position-relative">
          <div class="col-12">
            <div class="header-align">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li class="has-submenu"><a href="#/"><span>Home</span></a>
                    <ul class="submenu-nav">
                      <li><a href="index.html"><span>Home One</span></a></li>
                      <li><a href="index-two.html"><span>Home Two</span></a></li>
                    </ul>
                  </li>
                  <li><a href="about-us.html"><span>About</span></a></li>
                  <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                    <ul class="submenu-nav">
                      <li><a href="account.html"><span>Account</span></a></li>
                      <li><a href="account-login.html"><span>Login</span></a></li>
                      <li><a href="account-register.html"><span>Register</span></a></li>
                      <li><a href="page-not-found.html"><span>Page Not Found</span></a></li>
                    </ul>
                  </li>
                  <li class="has-submenu position-static"><a href="#/"><span>Shop</span></a>
                    <ul class="submenu-nav submenu-nav-mega column-3">
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                        <ul>
                          <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                          <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                          <li><a href="shop.html"><span>Shop Left Sidebar</span></a></li>
                          <li><a href="shop-right-sidebar.html"><span>Shop Right Sidebar</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Single Product</span></a>
                        <ul>
                          <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                          <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                          <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                          <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                        <ul>
                          <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                          <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                          <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                          <li><a href="shop-compare.html"><span>Compare</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                    <ul class="submenu-nav submenu-nav-mega">
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Layout</a>
                        <ul>
                          <li><a href="blog.html">Blog Grid</a></li>
                          <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                          <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Single Blog</a>
                        <ul>
                          <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                          <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                          <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="contact.html"><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
