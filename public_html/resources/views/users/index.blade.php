@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/users.js"></script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn bg-pink trigger-modal btn-md f-black" data-toggle="modal" data-target="#create_modal">
                <i class="fa fa-plus f-black"></i> Add User
            </a>
            @include('layouts.message')
        </div>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>System Users Table</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0" id="tbl-users" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="35%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Full Name</th>
                                <th width="20%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Email</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Classification</th> 
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Status</th> 
                                <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>

                                    <td data-label="Full Name" class="align-middle header with-label">
                                        <span class="text-xs {{ $user->email_verified_at == null ? 'text-danger' : '' }}">
                                            {{ $user->full_name }} 
                                        </span>
                                    </td>
                                    <td data-label="Email" class="align-middle header with-label">
                                        <span class="text-xs {{ $user->email_verified_at == null ? 'text-danger' : '' }}">
                                            {{ $user->email }}
                                        </span>
                                    </td>
                                    <td data-label="Classification" class="align-middle with-label">
                                        <span class="text-xs {{ $user->email_verified_at == null ? 'text-danger' : '' }}">
                                            {{ $user->classification_id == 1 ? 'Administrator' : 'Cashier' }}
                                        </span>
                                    </td>
                                    <td data-label="Status" class="align-middle with-label">
                                        <span class="text-xs">
                                            @if($user->status == 1)
                                                <span class="badge badge-sm bg-gradient-success">active</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-secondary">inactive</span>
                                            @endif
                                        </span>
                                    </td>
                                    <td class="align-middle text-center action">
                                        <a href="#" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
                                            text-center align-items-center justify-content-center btn-edit-user"
                                            id="{{$user->id}}" 
                                            data-full-name="{{$user->full_name}}" 
                                            data-email="{{$user->email}}"
                                            data-classification="{{$user->classification_id}}"
                                            data-status="{{$user->status}}">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('users.create')
    @include('users.edit')
    
@endsection