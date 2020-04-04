@extends('layouts.auth')

@section('content')
<!-- Log In page -->
<div class="row">
    <div class="col-lg-3 pr-0">
        <div class="card mb-0 shadow-none">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-sm.png" height="60" alt="logo" class="my-3"></a>
                </h3>

                <div class="px-3">
                    <h4 class="text-muted font-18 mb-2 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">Sign in to continue to Yum Recipes.</p>

                    <form class="form-horizontal my-4" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="username" placeholder="Enter username">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>                                    
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password">
                            
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>                                
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{ route('password.request') }}" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>                                    
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-2">
                                <button class="btn btn-warning btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                            </div>
                        </div>                            
                    </form>
                </div>
                <div class="m-3 text-center bg-light p-3 text-warning">
                    <h4 class="">Don't have an account ? </h4>
                    <p class="font-13">Join <span>Yum Recipes</span> Now</p>
                    <a href="{{ route('register') }}" class="btn btn-warning waves-effect waves-light">Free Resister</a>                
                </div>
                <div class="mt-4 text-center">
                    <p class="mb-0 text-warning">© 2020 Yum Recipes.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center">
        <div class="accountbg d-flex align-items-center"> 
            <div class="account-title text-center text-white">
                <h4 class="mt-3">Welcome To <span class="text-warning">Yum Recipes</span> </h4>
                <h1 class="">Let's Get Started</h1>
                <p class="font-14 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                <div class="border w-25 mx-auto border-warning"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Log In page -->
@endsection
