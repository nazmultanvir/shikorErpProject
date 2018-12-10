@extends('layouts.auth')

@section('content')

    <div class="container w-420 p-15 bg-white mt-40 text-center">
        <h2 class="text-light text-greensea">{{ __('Login') }}</h2>

        <form name="form" class="form-validation mt-20" method="POST" action="{{ route('login') }}" novalidate="">
            @csrf
            <div class="form-group">
                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} underline-input" placeholder="{{ __('E-Mail Address') }}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} underline-input" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group text-left mt-20">
                <button type="submit" class="btn btn-greensea b-0 br-2 mr-5">{{ __('Login') }}</button>
                <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">

                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i></i> Remember me

                </label>
                <a href="{{ route('password.request') }}" class="pull-right mt-10">{{ __('Forgot Your Password?') }}</a>
            </div>

        </form>

        <hr class="b-3x">

        <div class="social-login text-left">

            <ul class="pull-right list-unstyled list-inline">
                <li class="p-0">
                    <a class="btn btn-sm btn-primary b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="p-0">
                    <a class="btn btn-sm btn-info b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="p-0">
                    <a class="btn btn-sm btn-lightred b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                </li>
                <li class="p-0">
                    <a class="btn btn-sm btn-primary b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>

            <h5>Or login with</h5>

        </div>

        <div class="bg-slategray lt wrap-reset mt-40">
            <p class="m-0">
                <a href="{{ route('register') }}" class="text-uppercase">Create an account</a>
            </p>
        </div>

    </div>
@endsection
