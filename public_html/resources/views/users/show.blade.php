@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_script')
    <script type="text/javascript" src="/js/users.js"></script>
@endsection

@section('page_css')
    <style>
        .font-18 {
            font-size: 18pt !important;
        }

        td {
            font-size: 0.75rem !important
        }
    </style>
@endsection
@section('content')

    @include('layouts.message')

    <div class="page-header mt-n1 min-height-200 border-radius-xl mt-4" style="background-image: url('/vendor/soft_ui/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-info opacity-8"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl pt-3 position-relative">
                    <img src="/images/profile-icon2.png" alt="profile_image" class="w-100 border-radius-lg">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1 btn-edit-user" 
                        id="{{$user->id}}" 
                        data-name="{{$user->name}}" 
                        data-username="{{$user->username}}"
                        data-classification="{{$user->classification_id}}"
                        data-status="{{$user->status}}">
                        {{ Helper::name_format($user->first_name, $user->middle_name, $user->last_name, $user->suffix) }}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm"> 
                        {{ Helper::get_user_type($user->classification_id) }}
                    </p>
                </div>
            </div>
            
        </div>
    </div>

    

@endsection