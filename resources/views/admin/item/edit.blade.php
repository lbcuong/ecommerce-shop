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
                            <h2 class="content-header-title float-left mb-0">Update Item</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('items.index') }}">Item</a>
                                    </li>
                                    <li class="breadcrumb-item active">Update
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <form action="{{ route('items.update', $item->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input name="id" value="{{ $item->id }}" type="hidden">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" placeholder="Name"
                                                                name="name" value="{{ $item->name }}">
                                                            <span class="text-danger">
                                                                @error('name')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category</label>
                                                            <select class="form-control" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    <option disabled>-------- {{ $category->name }}
                                                                        ---------</option>
                                                                    @foreach ($category->children as $child)
                                                                        <option value="{{ $child->id }}"
                                                                            {{ $item->category_id == $child->id ? 'selected' : '' }}>
                                                                            {{ $child->name }} </option>
                                                                    @endforeach
                                                                @endforeach
                                                            </select>
                                                            <span class="text-danger">
                                                                @error('category_id')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Quantity</label>
                                                            <input type="text" class="form-control" placeholder="Quantity"
                                                                name="quantity" value="{{ $item->quantity }}">
                                                            <span class="text-danger">
                                                                @error('quantity')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control" placeholder="Price"
                                                                name="price" value="{{ $item->price }}">
                                                            <span class="text-danger">
                                                                @error('price')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Detail</label>
                                                            <textarea type="text" class="form-control" placeholder="Detail" name="detail"
                                                                value="{{ $item->detail }}"> {{ $item->detail }} </textarea>
                                                            <span class="text-danger">
                                                                @error('detail')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Image</label>
                                                            <input type="file" class="form-control" placeholder="Image"
                                                                name="image" value="{{ $item->image }}">
                                                            <img class="img-fluid my-2" src="{{ asset($item->image) }}"
                                                                alt="$item->image" width="200">
                                                            <span class="text-danger">
                                                                @error('image')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <input type="submit" value="Save"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                                    <a type="submit" value="Save"
                                                        class="btn btn-primary text-white glow mb-1 mb-sm-0 mr-0 mr-sm-1"
                                                        href="{{ route('items.index') }}">Back to list<a>
                                                </div>
                                            </div>
                                        </form>
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
