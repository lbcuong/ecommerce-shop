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
                            <h2 class="content-header-title float-left mb-0">Users</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="index.html">User</a>
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
                <!-- Zero configuration table -->
                <section>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="btn-toolbar">
                                        <div class="btn-group mr-1">
                                            <span class="btn btn-block btn-primary text-white action-create-item"
                                                data-toggle="modal" data-target="#modal-create-edit-item">
                                                <i class='feather icon-plus'></i> New User
                                            </span>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-primary text-white destroy-multiple disabled" data-route="{{ route('itemsDatatable.destroyMultiple') }}">
                                                <i class="feather icon-trash"></i> Remove Items
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            {{ $dataTable->table() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>

    <!-- Modal starts-->
    @include('admin.item-datatable.modal.create-edit-modal')
    @include('admin.item-datatable.modal.detail-modal')
    <!-- Modal ends -->
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
