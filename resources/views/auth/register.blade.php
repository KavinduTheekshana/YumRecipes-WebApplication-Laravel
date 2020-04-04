@extends('layouts.auth')

@section('content')


<!-- Resister page -->
<div class="row">
    <div class="col-lg-3 pr-0">
        <div class="card mb-0 shadow-none">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-sm.png" height="60" alt="logo" class="my-3"></a>
                </h3>

                <div class="px-3">
                    <h4 class="text-muted font-18 mb-2 text-center">Free Register</h4>
                    <p class="text-muted text-center">Get your free Yum Recipes account now.</p>

                    <form class="form-horizontal my-4" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="username" placeholder="Enter username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                                    
                        </div>

                        <div class="form-group">
                            <label for="username">Email Address</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="far fa-envelope"></i></span>
                                </div>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address">

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
                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" name="password" placeholder="Enter password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>                                
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Confirm Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon4"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control" id="confirmpassword" placeholder="Confirm password">
                            </div>                                
                        </div>


                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-2">
                                <button class="btn btn-warning btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                <h6 class="text-center" ><a href="{{ route('login') }}" style="color: #15202b"> Back to Login</a></h6>
                            </div>
                        </div>                            
                    </form>
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
                <h4 class="mt-3">Welcome To <span class="text-warning">AMEZIA</span> </h4>
                <h1 class="">Let's Get Started</h1>
                <p class="font-14 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                <div class="border w-25 mx-auto border-warning"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Register page -->


@endsection
