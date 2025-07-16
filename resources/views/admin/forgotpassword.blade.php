@extends('admin.layout.master')

@section('title')
    Forget Password | Admin
@endsection

@section('content')

    <div class="bg-gradient-success">
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">


                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">

                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">


                                <div class="p-5">


                                    @session('statusForgetEmail')
                                        <div class="d-flex justify-content-center align-items-center">

                                            <div class="alert alert-primary text-center">
                                                {{ Session::get('statusForgetEmail') }}
                                            </div>

                                        </div>
                                    @endsession





                                    <div>


                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                            <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                                and we'll send you a link to reset your password!</p>
                                        </div>

                                        <form class="user" method="post" action="forgetpassword">
                                            @csrf
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address...">

                                                @error('email')
                                                    <div class="alert alert-danger my-2 text-center">
                                                        {{ $message }}
                                                    </div>
                                                @enderror


                                            </div>

                                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                                Send E-mail
                                            </button>

                                        </form>


                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('login') }}">Already have an account?
                                                Login!</a>
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
