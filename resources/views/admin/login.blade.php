@extends('admin.layout.master')


@section('title')
    Login | Admin
@endsection



@section('content')
    <div class="bg-gradient-primary">

        <div class="container">



            <!-- Outer Row -->
            <div class="row justify-content-center">



                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">



                                @session('statusForgetEmail')
                                    <div class="d-flex justify-content-center align-items-center">

                                        <div class="alert alert-primary text-center">
                                            {{ Session::get('statusForgetEmail') }}
                                        </div>

                                    </div>
                                @endsession


                                <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                    <img class="w-100 h-100" src="{{ asset('dashboard/img/undraw_posting_photo.svg') }}"
                                        alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>

                                            <div class="d-flex justify-content-center align-items-center mt-5">


                                                @session('updatePassword')
                                                    <div class="d-flex justify-content-center align-items-center">

                                                        <div class="alert alert-success text-center">
                                                            {{ Session::get('updatePassword') }}
                                                        </div>

                                                    </div>
                                                @endsession
                                            </div>


                                            <form class="user" method="POST" action="{{ route('loginAction') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input value="{{ old('username') }}" name="username" type="username"
                                                        class="form-control form-control-user" id="exampleInputusername"
                                                        placeholder="Username ">

                                                    @error('username')
                                                        <div class="alert alert-danger m-1 w-100 text-center">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <input name="password" type="password"
                                                        class="form-control form-control-user" id="exampleInputPassword"
                                                        placeholder="Password">
                                                </div>


                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input value="1" name="remember" type="checkbox"
                                                            class="custom-control-input" id="customCheck">
                                                        <label class="custom-control-label" for="customCheck">Remember
                                                            Me</label>
                                                    </div>
                                                </div>



                                                <button type="submit" class="btn btn-primary btn-user btn-block"> Login
                                                </button>


                                                <hr>
                                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                                </a>
                                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                                </a>
                                            </form>
                                            <hr>
                                            <div class="text-center">

                                                <a class="small" href="{{ route('forgetpassword') }}">
                                                    Forgot Password?
                                                </a>
                                            </div>

                                            <div class="text-center">
                                                <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    @endsection
