@extends('layouts.dashboard')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
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
                                                <i class='feather icon-plus'></i> New Issue
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Categories</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($issues as $issue)
                                                    <tr>
                                                        <th>{{ $issue->name }}</th>
                                                        <td>
                                                            @foreach ($issue->categories as $category)
                                                                {{ $category->name }}{{ $loop->last ? '' : ', ' }}
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <span class="action-delete-item" data-id="{{ $issue->id }}"><i class="feather icon-trash-2"></i></span>
                                                        </td>
                                                        <td>
                                                            <span class="action-edit-item" data-id="{{ $issue->id }}"><i class="feather icon-edit"></i></span>
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
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>

    <!-- Modal starts-->
    @include('admin.issues.modal.create-edit-modal')
    <!-- Modal ends -->
@endsection
