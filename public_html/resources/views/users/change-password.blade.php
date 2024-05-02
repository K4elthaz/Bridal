@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_script')

@endsection
@section('page_css')

@endsection

@section('content')

<div class="mx-lg-6">
    @include('layouts.message')
</div>

<section class="min-vh-50 mx-lg-6 mb-8">
    <div class="page-header align-items-start pb-11 pt-6 border-radius-lg" style="background-image: url('/vendor/soft_ui/assets/img/curved-images/curved0.jpg');">
        <span class="mask bg-pink opacity-8"></span>
    </div>
    <div class="container">
        <div class="row mt-lg-n14 mt-md-n15 mt-n11">
            <div class="col-xl-5 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-3">
                        <div class="avatar avatar-xl">
                            <img src="/images/reset-password.png" alt="profile_image" class="w-100 border-radius-lg">
                        </div>
                        <h5 class="mt-2">Setup your new password</h5>
                     </div>
                    <div class="card-body pt-0">
                        <form method="post" action="/update-password">
                        @csrf()
                            <label class="text-muted">Current password</label> <span class="text-danger">&#x2022;</span>
                            <input type="password" class="form-control" name="current_password" required>

                            <label class="text-muted">New password</label> <span class="text-danger">&#x2022;</span>
                            <input type="password" class="form-control" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}" title="Please enter at least 8 characters, including at least 1 uppercase letter, 1 lowercase letter, and 1 number" name="new_password" required>

                            <label class="text-muted">Confirm password</label> <span class="text-danger">&#x2022;</span>
                            <input type="password" class="form-control" name="confirm_password" required>

                            <div class="text-center">
                                <button type="submit" class="btn bg-pink f-black w-100 my-4 mb-2">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

