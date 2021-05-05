@extends('admin.adminlayout')

@section('Content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        @if (Session::has('errors'))
            <div class="alert alert-danger  mr-8 ml-8" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <ul class="list-unstyled">
                    @foreach (Session::get('errors')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Profile Overview-->
                <div class="d-flex flex-row">
                    <!--begin::Aside-->
                    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                        @include('admin.commun.profile')
                    </div>
                    <!--end::Aside-->

                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <!--begin::Header-->
                            <div class="card-header py-3">
                                <div class="card-title align-items-start flex-column">
                                    <h3 class="card-label font-weight-bolder text-dark">@lang('Change Password')</h3>
                                    <span class="text-muted font-weight-bold font-size-sm mt-1">@lang('Change your account password')</span>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form class="form" id="form_possword" method="POST"
                                action="{{ route('postupdatepassword') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-alert">@lang('Current Password')</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" name="current_password"
                                                class="form-control form-control-lg form-control-solid mb-2 " value=""
                                                placeholder="@lang('Current Password')" />
                                            <span class="form-text text-muted" role="alert">
                                                <strong id="current_password" class="text-danger current_password"></strong>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-alert">@lang('New Password')</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" name="password"
                                                class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                                value="" placeholder="@lang('New Password')" />
                                            @error('password')
                                                <span class="form-text text-muted" role="alert"><strong
                                                        class="text-danger">{{ $message }}</strong></span>
                                            @enderror
                                            <span class="form-text text-muted" role="alert">
                                                <strong id="password" class="text-danger password"></strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-alert">@lang('Verify Password')</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" name="password_confirmation"
                                                class="form-control form-control-lg form-control-solid" value=""
                                                placeholder="@lang('Verify Password')" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer py-3">
                                    <div class="card-toolbar">
                                        <button type="submit"
                                            class="btn btn-success mr-2 mb-3 float-right">@lang('Submit')</button>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Profile Overview-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->
    <script type="text/javascript">
        // Interception du Formulaire de connexion

        var form = $('#form_possword').get(0)


        $('#form_possword').submit(function(e) {
            // Empêcher la soumission de formulaire normale, nous le faisons bien en JS à la place
            e.preventDefault();

            var formData = new FormData();

            formData.append('_token', $('[name=_token]').val());
            formData.append('current_password', $('[name=current_password]').val());
            formData.append('password', $('[name=password]').val());
            formData.append('password_confirmation', $('[name=password_confirmation]').val());

            var method = '{!! route('postupdatepassword') !!}'

            $.ajax({
                url: method,
                type: "post",
                dataType: "json",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    if (data.success == false) {
                        $('.password').text('');
                        $('#password').removeClass('is-invalid');
                        $('#password').addClass('is-invalid');
                        $('.password').text(data.message);
                    }
                },
                error: function(data) {

                    $('.new_password').text('');
                    $('.current_password').text('');

                    $('#new_password').removeClass('is-invalid');
                    $('#current_password').removeClass('is-invalid');

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


@section('navigation')
    <!--begin::Page Heading-->
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><a href="{{route('users.index')}}" >@lang('Users Management')</a></h5>
        <!--end::Page Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('profil', ['id' => auth()->user()->id]) }}" class="text-muted">@lang('Profil')</a>
            </li>
            <li class="breadcrumb-item text-muted">
                <div class="text-muted">@lang('Change Password')</div>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page Heading-->
@endsection

@section('title')
    {{ config('app.name') }} | @lang('Users Management') | @lang('Profil') | @lang('Change Password')
@endsection
