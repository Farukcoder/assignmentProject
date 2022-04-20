@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="section-authentication-register d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card radius-15">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5">
                                <div class="text-center">
                                    <img src="{{ asset('public/assets/images/logo-icon.png') }}" width="80" alt="">
                                    <h3 class="mt-4 font-weight-bold">Create an Account</h3>
                                </div>
                                @if (!empty($result))
                                <div class="alert bg-success text-white alert-dismissible fade show" role="alert"><strong>{{ $result['message'] }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                                <div class="login-separater text-center"> <span>REGISTER</span>
                                    <hr />
                                </div>
                                <form method="POST" action="{{ route('userRegister') }}">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Jhon" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="example@user.com" />
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" id="address" cols="10" rows="3" class="form-control"></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Username</label>
                                            <input class="form-control border-right-0" type="text" name="username" id="username" placeholder="username">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input class="form-control border-right-0" type="password" name="password" id="password">
                                                <div class="input-group-append"> <a href="javascript:;"
                                                        class="input-group-text bg-transparent border-left-0"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>SSN NO</label>
                                        <input type="text" name="ssn" id="ssn" class="form-control">
                                        {{-- <input type="hidden" name="stripe_scret_key" id="stripe_scret_key" value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9" class="form-control"> --}}
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I read and agree to Terms
                                                & Conditions</label>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-3 w-100">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        {{-- <button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                                        </button> --}}
                                    </div>
                                    <hr />
                                    <div class="text-center mt-4">
                                        <p class="mb-0">Already have an account? <a
                                                href="{{ route('login') }}">Login</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('public/assets/images/login-images/register-frent-img.jpg') }}"
                                class="card-img login-img h-100" alt="...">
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
