@extends('layouts.app')

@section('title', 'Login')

@section('content')
<!-- <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">Login</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div> -->


<div class="main-wrapper">

<div class="account-content">
    <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-01">
        <div
            class="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
            <form method="POST" action="{{ route('login') }}" class="flex-fill">
            @csrf
                <div class="mx-auto mw-450">
                    <div class="text-center mb-4">
                        <img src="https://www.bharatassetz.com/assets/front/images/logo.png" class="img-fluid" alt="Logo">
                    </div>
                    <div class="mb-4">
                        <h4 class="mb-2 fs-20">Log In</h4>
                        <p>Access the Bharatassetz panel using your Email-Id and Password</p>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email Address</label>
                        <div class="position-relative">
                            <span class="input-icon-addon">
                                <i class="ti ti-mail"></i>
                            </span>
                            <input type="email" name="email" class="form-control fw-bold text-black" placeholder="Enter Mail ID" required >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" name="password" class="pass-input fw-bold form-control text-black" placeholder="Enter Password" required>
                            <span class="ti toggle-password ti-eye-off"></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="form-check form-check-md d-flex align-items-center">
                            <input class="form-check-input" type="checkbox" value="" id="checkebox-md"
                                checked="">
                            <label class="form-check-label" for="checkebox-md">
                                Remember Me
                            </label>
                        </div>
                        <div class="text-end">
                            <a href="forgot-password.html" class="text-primary fw-medium link-hover">Forgot
                                Password?</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Log In</button>
                    </div>
                    <div class="mb-3">
                        <h6>New on our platform?<a href="register.html" class="text-purple link-hover"> Create
                                an account</a></h6>
                    </div>
                    <!-- <div class="form-set-login or-text mb-3">
                        <h4>OR</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-center flex-wrap mb-3">
                        <div class="text-center me-2 flex-fill">
                            <a href="javascript:void(0);"
                                class="br-10 p-2 px-4 btn bg-pending  d-flex align-items-center justify-content-center">
                                <img class="img-fluid m-1" src="assets/img/icons/facebook-logo.svg"
                                    alt="Facebook">
                            </a>
                        </div>
                        <div class="text-center me-2 flex-fill">
                            <a href="javascript:void(0);"
                                class="br-10 p-2 px-4 btn bg-white d-flex align-items-center justify-content-center">
                                <img class="img-fluid  m-1" src="assets/img/icons/google-logo.svg"
                                    alt="Facebook">
                            </a>
                        </div>
                        <div class="text-center flex-fill">
                            <a href="javascript:void(0);"
                                class="bg-dark br-10 p-2 px-4 btn btn-dark d-flex align-items-center justify-content-center">
                                <img class="img-fluid  m-1" src="assets/img/icons/apple-logo.svg" alt="Apple">
                            </a>
                        </div>
                    </div> -->
                    <br>
                    <br>
                    <div class="text-center">
                        <p class="fw-medium text-gray">Copyright &copy; 2025 - BharatAssetz</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
@endsection
