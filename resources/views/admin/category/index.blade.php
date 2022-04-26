@extends('layouts.dashboard')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <div class="btn-toolbar">
                                <div class="btn-group mr-1">
                                    <span class="btn btn-block btn-primary text-white action-create-item"
                                        data-toggle="modal" data-target="#modal-create-edit-item">
                                        <i class='feather icon-plus'></i> New Category
                                    </span>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-primary text-white destroy-multiple disabled"
                                        data-route="{{ route('itemsDatatable.destroyMultiple') }}">
                                        <i class="feather icon-trash"></i> Remove Category
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $traverseList($categories) }}
                        </div>
                    </div>
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table" id="tree-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" id="items-checkbox-master"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="items-checkbox-master"></label>
                                            </div>
                                        </th>
                                        <th>Id</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{ $traverse($categories) }}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                            @foreach ($categories as $category)
                                <optgroup label="{{ $category->name }}">
                                    @foreach ($category->children as $cats)
                                <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;{{ $cats->name }}">
                                    @foreach ($cats->children as $cat)
                                        <option value="{{ $cat->id }}">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $cat->name }} </option>
                                        @foreach ($cat->children as $c)
                                            <option value="{{ $c->id }}">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $c->name }}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </optgroup>
                            @endforeach
                            </optgroup>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.category.modal.create-edit-modal')
@endsection
