@extends('admin.layout.master')

@section('title')
    Forget Password | Admin
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
                                <div class="col-lg-6 d-none d-lg-block bg-password-image">
                                    <img
                                    class="w-100 h-100"
                                     src="{{asset('dashboard/img/undraw_posting_photo.svg')}}" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2"> Reset Password !  </h1>
                                            
                                                @session('updatePassword')
                                                    <div class="d-flex justify-content-center align-items-center">

                                                        <div class="alert alert-success text-center">
                                                            {{ Session::get('updatePassword') }}
                                                        </div>

                                                    </div>
                                                @endsession
                                        </div>

                                        <form class="user" method="post" action="{{route("password.update")}}">
                                            @csrf
                                            <input type="hidden" name="token" value="{{$token}}" id="">
                                            <input type="hidden" name="email" value="{{$email}}" id="">
                                            
                                  

                                            <div class="form-group">
                                                <input name="password" type="password"
                                                    class="form-control form-control-user" id="exampleInputEmail"
                                                    aria-describedby="emailHelp" placeholder="New Password">

                                                @error('password')
                                                    <div class="alert alert-danger my-2 text-center">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>


                                            <div class="form-group">
                                                <input name="password_confirmation" type="password"
                                                    class="form-control form-control-user" id="exampleInputEmail"
                                                    aria-describedby="emailHelp" placeholder="New Password">

                                                @error('password_confirmation')
                                                    <div class="alert alert-danger my-2 text-center">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                            </div>

                                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                                 Reset Password</button>

                                        </form>
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
