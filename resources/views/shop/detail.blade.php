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
                        <h2 class="content-header-title float-left mb-0">Product Details</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                </li>
                                <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                                </li>
                                <li class="breadcrumb-item active">Details
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
        <div class="content-body">
            <!-- app ecommerce details start -->
            <section class="app-ecommerce-details">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 mt-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ Storage::url($item->image) }}" class="img-fluid" alt="product image">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h5> {{ $item->name }}
                                </h5>
                                <p class="text-muted">by {{ $item->category->name }}</p>
                                <div class="ecommerce-details-price d-flex flex-wrap">

                                    <p class="text-primary font-medium-3 mr-1 mb-0">?? {{number_format($item->price, 0, ',', ',')}}</p>
                                    <span class="pl-1 font-medium-3 border-left">
                                        <i class="feather icon-star text-warning"></i>
                                        <i class="feather icon-star text-warning"></i>
                                        <i class="feather icon-star text-warning"></i>
                                        <i class="feather icon-star text-warning"></i>
                                        <i class="feather icon-star text-secondary"></i>
                                    </span>
                                    <span class="ml-50 text-dark font-medium-1">424 ratings</span>
                                </div>
                                <hr>
                                <p>{{ $item->detail }}</p>
                                <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Free Shipping
                                </p>
                                <p class="font-weight-bold"> <i class="feather icon-dollar-sign mr-50 font-medium-2"></i>EMI options available
                                </p>
                                <hr>
                                <div class="form-group">
                                    <label class="font-weight-bold">Color</label>
                                    <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                            <div class="color-option b-primary">
                                                <div class="filloption bg-primary"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-success">
                                                <div class="filloption bg-success"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-danger">
                                                <div class="filloption bg-danger"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-warning">
                                                <div class="filloption bg-warning"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-black">
                                                <div class="filloption bg-black"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <p>Available - <span class="text-success">{{ $item->quantity }} item(s)</span></p>

                                <div class="d-flex flex-column flex-sm-row">
                                    <form action="{{ route('carts.store') }}" method="POST">
                                        @csrf
                                        <input name="id" value="{{ $item->id }}" type="hidden">
                                        <input name="quantity" value="1" type="hidden">
                                        <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i>ADD TO CART</button>
                                    </form>
                                    <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>WISHLIST</button>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                                <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                                <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                                <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="item-features py-5">
                        <div class="row text-center pt-2">
                            <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                <div class="w-75 mx-auto">
                                    <i class="feather icon-award text-primary font-large-2"></i>
                                    <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                    <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i class="feather icon-clock text-primary font-large-2"></i>
                                    <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                    <p>Marshmallow biscuit donut drag??e fruitcake. Jujubes wafer cupcake.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i class="feather icon-shield text-primary font-large-2"></i>
                                    <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                    <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 mb-2 text-center">
                            <h2>RELATED PRODUCTS</h2>
                            <p>People also search for this items</p>
                        </div>
                        <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                            <div class="swiper-wrapper">
                                @foreach ($relatedItems as $relatedItem)
                                <div class="swiper-slide rounded swiper-shadow">
                                    <a href="{{ route('detail', ['id' => $relatedItem->id]) }}">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                {{ $relatedItem->name }}
                                            </p>
                                            <p>
                                                <small>by</small>
                                                <small>{{ $relatedItem->category->name }}</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <img src="{{ Storage::url($relatedItem->image) }}" class="img-fluid" alt="image">
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-secondary"></i>
                                            </div>
                                            <p class="text-primary mb-0">?? {{number_format($relatedItem->price, 0, ',', ',')}}</p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- app ecommerce details end -->

        </div>
    </div>
</div>
@endsection