@extends('layouts.dashboard')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Thumb View</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Data List</a>
                                    </li>
                                    <li class="breadcrumb-item active">Thumb View
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a
                                    class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button"
                                    class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="container">
                        <div class="card">
                            <div class="row">
                                <div class="card-body">
                                    @foreach ($categories as $category)
                                        <div class="col-md-12">
                                            <h3>{{ $category->name }}</h3>
                                            <hr />
                                            <div class="row">
                                                @foreach ($category->children as $cats)
                                                    <div class="col-md-4">
                                                        <h4>{{ $cats->name }}</h4>
                                                        <hr />
                                                        @foreach ($cats->children as $cat)
                                                            <h5>{{ $cat->name }}</h5>
                                                            @foreach ($cat->children as $c)
                                                                <h6>{{ $c->name }}</h6>
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                @foreach ($categories as $category)
                                    <optgroup label="{{ $category->name }}">
                                    @foreach ($category->children as $cats)
                                        <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;{{ $cats->name }}">
                                        @foreach ($cats->children as $cat)
                                            <option value="{{ $cat->id }}"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $cat->name }} </option>
                                            @foreach ($cat->children as $c)
                                                <option value="{{ $c->id }}"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $c->name }} </option>
                                            @endforeach
                                        @endforeach
                                        </optgroup>
                                    @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- dataTable ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
@endsection
