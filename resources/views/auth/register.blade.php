@extends('auth.authlayout')

@section('content')

<!--begin::Login Sign up form-->
<div class="login-signup">
    <div class="mb-20">
        <h3 class="opacity-40 font-weight-normal">@lang('Sign Up')</h3>
        <p class="opacity-40">@lang('Enter your details to create your account')</p>
    </div>
    <form class="form text-center" method="POST" action="{{ route('register') }}" id="register_form">
            @csrf
        <div class="form-group">
            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('name') is-invalid @enderror" type="text"  id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
            @error('name')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
             </span>
            @enderror
            <span class="invalid-feedback" role="alert">
                <strong class="name"></strong>
             </span>
        </div>
        <div class="form-group">
            <input id="email" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="invalid-feedback" role="alert">
                <strong class="email"></strong>
             </span>
        </div>
        <div class="form-group">
            <input id="password" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="invalid-feedback" role="alert">
                <strong class="password"></strong>
             </span>
        </div>
        <div class="form-group">
            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" name="password_confirmation" required autocomplete="new-password" />

        </div>
        <div class="form-group text-left px-8">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
                <input type="checkbox" name="agree" />
                <span></span>@lang('I Agree the')
{{--                <a href="#" class="text-white font-weight-bold ml-1">@lang('terms and conditions')</a>.</label>--}}
            </div>
            <div class="form-text text-muted text-center"></div>
        </div>
        <div class="form-group">
            <button id="kt_login_signup_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">@lang('Sign Up')</button>
            <button id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">@lang('Cancel')</button>
        </div>
    </form>
</div>
<!--end::Login Sign up form-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->
<script type="text/javascript">
    // Interception du Formulaire de connexion

    var form = $('#register_form').get(0)
    $('#register_form').submit(function(e) {
        // Empêcher la soumission de formulaire normale, nous le faisons bien en JS à la place
        e.preventDefault();


        var formData = new FormData();

        formData.append('_token', $('[name=_token]').val());
        formData.append('name', $('[name=name]').val());
        formData.append('email', $('[name=email]').val());
        formData.append('password', $('[name=password]').val());
        formData.append('password_confirmation', $('[name=password_confirmation]').val());

        var method = '{!! route('register') !!}'

        $.ajax({
            url: method,
            type: "post",
            dataType: "json",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(data) {
                //window.location.replace(data.redirect);
                console.log(data);
            },
            error: function(data) {

                $('.name').text('');
                $('.email').text('');
                $('.password').text('');



                $('#name').removeClass('is-invalid');
                $('#email').removeClass('is-invalid');
                $('#password').removeClass('is-invalid');

                var errors = $.parseJSON(data.responseText);
                console.log(errors.errors);
                $.each(errors.errors, function(key, value) {
                    $('#' + key).addClass('is-invalid');
                    $('.' + key).text(value);
                });
            }
        });
    });

</script>
@endsection
