@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="section-authentication-login d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <div class="card radius-15">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5">
                            <div class="text-center">
                                <img src="{{asset('public/assets/images/logo-icon.png')}}" width="80" alt="">
                                <h3 class="mt-4 font-weight-bold">Assignment Project</h3>
                            </div>
                            @if (!empty($result))
                            <div class="alert bg-danger text-white alert-dismissible fade show" role="alert"><strong>{{ $result['message'] }}</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
								</button>
							</div>
                            @endif

                            <div class="login-separater text-center"> <span>LOGIN</span>
                                <hr/>
                            </div>
                            <form method="POST" action="{{ route('userLogin') }}">
                                @csrf
                                <div class="form-group mt-4">
                                    <label>Email Address</label>
                                    <input type="text" id="username" class="form-control @error('email') is-invalid @enderror" name="username" value="test" required autocomplete="email" autofocus placeholder="Enter your email address" />

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $masseges }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="12345678" required autocomplete="current-password" placeholder="Enter your password" />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                            <label class="custom-control-label" for="customSwitch1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group col text-right">
                                        {{-- <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a> --}}
                                    </div>
                                </div>
                                <div class="btn-group mt-3 w-100">
                                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                    <button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}">Registration</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('public/assets/images/login-images/login-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
@endsection
