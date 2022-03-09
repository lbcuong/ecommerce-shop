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
                        <h2 class="content-header-title float-left mb-0">Items</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="index.html">Items</a>
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
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <a class="btn btn-block btn-primary text-white" href="{{ route('item.insert')}}">New Item</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Category</th>
                                                    <th>Price (đ)</th>
                                                    <th>Quantity</th>
                                                    <th>Detail</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="$item->image">
                                                    </td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>{{number_format($item->price, 0, ',', ',')}}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->detail }}</td>
                                                    <td>
                                                        <a class='managing text-decoration-none' href="{{ route('item.edit', ['id' => $item->id]) }}"><i class='feather icon-edit'></i></a>
                                                    </td>
                                                    <td>
                                                        <a class='managing text-decoration-none' onclick="return confirm('Are you sure to delete {{$item->name}} item?')" href="{{ route('item.destroy', ['id' => $item->id]) }}"><i class='feather icon-trash'></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection