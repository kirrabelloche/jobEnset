@extends('auth.authlayout')

@section('content')

<!--begin::Login forgot password form-->
<div class="login-forgot">
    <div class="mb-20">
        <h3 class="opacity-40 font-weight-normal">@lang('Forgotten Password ?')</h3>
        <p class="opacity-40">@lang('Enter your email to reset your password')</p>
    </div>
    <form class="form"  method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group mb-10">
            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8  @error('email') is-invalid @enderror" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <button id="kt_login_forgot_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2"> {{ __('Send Password Reset Link') }}</button>
            <button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">@lang('Cancel')</button>
        </div>
    </form>
</div>
<!--end::Login forgot password form-->

@endsection
