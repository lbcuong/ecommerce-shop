@extends('layouts.app')
@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Shop</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                </li>
                                <li class="breadcrumb-item active">Shop
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached content-right">
            <div class="content-body">
                <!-- Ecommerce Content Section Starts -->
                <section id="ecommerce-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ecommerce-header-items">
                                <div class="result-toggler">
                                    <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                        <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                                    </button>
                                    <div class="search-results">
                                        {{ $b }}
                                    </div>
                                </div>
                                <div class="view-options">
                                    <select class="price-options form-control" id="ecommerce-price-options" name="price-sorting">
                                        <option selected>Featured</option>
                                        <option value="1">Lowest</option>
                                        <option value="2">Highest</option>
                                    </select>
                                    <div class="view-btn-option">
                                        <button class="btn btn-white view-btn grid-view-btn active">
                                            <i class="feather icon-grid"></i>
                                        </button>
                                        <button class="btn btn-white list-view-btn view-btn">
                                            <i class="feather icon-list"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Ecommerce Content Section Starts -->
                <!-- background Overlay when sidebar is shown  starts-->
                <div class="shop-content-overlay"></div>
                <!-- background Overlay when sidebar is shown  ends-->

                <!-- Ecommerce Search Bar Starts -->
                <section id="ecommerce-searchbar">
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <fieldset class="form-group position-relative">
                                <form action="{{ route('/') }}" method="GET">
                                    <input type="text" class="form-control" name="filter" value="{{ request()->input('filter') }}" placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </section>
                <!-- Ecommerce Search Bar Ends -->

                <!-- Ecommerce Products Starts -->
                <section id="ecommerce-products" class="grid-view">
                    @foreach ($items as $item)
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="{{ route('detail', ['id' => $item->id]) }}">
                                    <img class="img-fluid" src="{{ asset($item->image) }}" alt="img-placeholder"></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            <span>4</span> <i class="feather icon-star"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            đ {{number_format($item->price, 0, ',', ',')}}
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                    <p class="item-company">By <span class="company-name">Google</span></p>
                                </div>
                                <div>
                                    <p class="item-description">
                                        {{ $item->detail }}
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            <span>4</span> <i class="feather icon-star"></i>
                                        </div>
                                    </div>
                                    <div class="item-cost">
                                        <h6 class="item-price">
                                            đ {{number_format($item->price, 0, ',', ',')}}
                                        </h6>
                                    </div>
                                </div>
                                <div class="wishlist">
                                    <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                                </div>
                                <div class="cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Add to cart</span> <a href="app-ecommerce-checkout.html" class="view-in-cart d-none">View In Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
                <!-- Ecommerce Products Ends -->

                <!-- Ecommerce Pagination Starts -->
                <section id="ecommerce-pagination">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mt-2">
                                    {{ $items->appends(request()->input())->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
                <!-- Ecommerce Pagination Ends -->

            </div>
        </div>
        <div class="sidebar-detached sidebar-left">
            <div class="sidebar">
                <!-- Ecommerce Sidebar Starts -->
                <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                        </div>
                    </div>
                    <span class="sidebar-close-icon d-block d-md-none">
                        <i class="feather icon-x"></i>
                    </span>
                    <div class="card">
                        <div class="card-body">
                            <div class="multi-range-price">
                                <div class="multi-range-title pb-75">
                                    <h6 class="filter-title mb-0">Multi Range</h6>
                                </div>
                                <ul class="list-unstyled price-range" id="price-range">
                                    <li>
                                        <span class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="price-range" checked value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="ml-50">All</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="price-range" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="ml-50"> &lt;=$10</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="price-range" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="ml-50">$10 - $100</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="price-range" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="ml-50">$100 - $500</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="price-range" value="false">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="ml-50">&gt;= $500</span>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <!-- /Price Filter -->
                            <hr>
                            <!-- /Price Slider -->
                            <div class="price-slider">
                                <div class="price-slider-title mt-1">
                                    <h6 class="filter-title mb-0">Slider</h6>
                                </div>
                                <div class="price-slider">
                                    <div class="price_slider_amount mb-2">
                                    </div>
                                    <div class="form-group">
                                        <div class="slider-sm my-1 range-slider" id="price-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Price Range -->
                            <hr>
                            <!-- Categories Starts -->
                            <div id="product-categories">
                                <div class="product-category-title">
                                    <h6 class="filter-title mb-1">Categories</h6>
                                </div>
                                <ul class="list-unstyled categories-list">
                                    @foreach ($categories as $category)
                                    <li>
                                        <span class="vs-radio-con vs-radio-primary py-25">
                                            <input type="radio" name="category-filter" value="false" checked>
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="ml-50">{{ $category->name }}</span>
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Categories Ends -->
                            <hr>
                            <!-- Brands -->
                            <div class="brands">
                                <div class="brand-title mt-1 pb-1">
                                    <h6 class="filter-title mb-0">Brands</h6>
                                </div>
                                <div class="brand-list" id="brands">
                                    <ul class="list-unstyled">
                                        @foreach ($brands as $brand)
                                        <li class="d-flex justify-content-between align-items-center py-25">
                                            <span class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                                <span class="">{{ $brand->name }}</span>
                                            </span>
                                            <span>{{ $brand->items_count }}</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- /Brand -->
                            <hr>
                            <!-- Rating section starts -->
                            <div id="ratings">
                                <div class="ratings-title mt-1 pb-75">
                                    <h6 class="filter-title mb-0">Ratings</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="unstyled-list list-inline ratings-list mb-0">
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li>& up</li>
                                    </ul>
                                    <div class="stars-received">(160)</div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="unstyled-list list-inline ratings-list mb-0">
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li>& up</li>
                                    </ul>
                                    <div class="stars-received">(176)</div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="unstyled-list list-inline ratings-list mb-0">
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li>& up</li>
                                    </ul>
                                    <div class="stars-received">(291)</div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                        <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                        <li>& up</li>
                                    </ul>
                                    <div class="stars-received">(190)</div>
                                </div>
                            </div>
                            <!-- Rating section Ends -->
                            <hr>
                            <!-- Clear Filters Starts -->
                            <div id="clear-filters">
                                <button class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                            </div>
                            <!-- Clear Filters Ends -->

                        </div>
                    </div>
                </div>
                <!-- Ecommerce Sidebar Ends -->

            </div>
        </div>
    </div>
</div>
@endsection