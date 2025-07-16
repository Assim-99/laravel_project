@extends('admin.layout.master')


@section('title')
    Register | Admin
@endsection



@section('content')
    <div class="bg-gradient-primary">


        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image">
                            <img
                                    class="w-100 h-100"
                                     src="{{asset('dashboard/img/undraw_posting_photo.svg')}}" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>


                                <form class="user" method="POST" action="{{ route('registerAction') }}">
                                    @csrf
                                    <div class="form-group row">

                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input value="{{ old('firstName') }}" name="firstName" type="text"
                                                class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="First Name">
                                        </div>


                                        <div class="col-sm-6">
                                            <input value="{{ old('lastName') }}" name="lastName" type="text"
                                                class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Last Name">
                                        </div>

                                        @if ($errors->has('lastName') || $errors->has('firstName'))
                                            <div class="alert alert-danger m-1 w-100 text-center">
                                                @error('lastName')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        @endif

                                    </div>



                                    <div class="form-group">
                                        <input value="{{ old('username') }}" name="username" type="username"
                                            class="form-control form-control-user" id="exampleInputusername"
                                            placeholder="Username ">

                                        @error('username')
                                            <div class="alert alert-danger m-1 w-100 text-center"> {{ $message }} </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <input value="{{ old('email') }}" name="email" type="email"
                                            class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email Address">
                                        @error('email')
                                            <div class="alert alert-danger m-1 w-100 text-center"> {{ $message }} </div>
                                        @enderror
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>

                                        <div class="col-sm-6">
                                            <input name="password_confirmation" type="password"
                                                class="form-control form-control-user" id="exampleRepeatPassword"
                                                placeholder="Repeat Password">
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger m-1 w-100 text-center"> {{ $message }} </div>
                                        @enderror

                                        @error('password_confirmation')
                                            <div class="alert alert-danger m-1 w-100 text-center"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Register Account
                                    </button>



                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{route('forgetpassword')}}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
