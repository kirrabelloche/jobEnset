@extends('admin.adminlayout')


@section('Content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
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
										<div class="card card-custom card-stretch">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">@lang('Personal Information')</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">@lang('Update your personal informaiton')</span>
												</div>

											</div>
											<!--end::Header-->
											<!--begin::Form-->
											<form class="form" method="POST" action="{{route('users.update',['user'=>auth()->user()->id])}}" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
												<!--begin::Body-->
												<div class="card-body">
													<div class="row">
														<label class="col-xl-3"></label>
														<div class="col-lg-9 col-xl-6">
															<h5 class="font-weight-bold mb-6">@lang("User's Info")</h5>
														</div>
													</div>
													 @include('admin.users.form')
												</div>
												<!--end::Body-->
                                                <!--begin::Header-->
											<div class="card-footer py-3">
												<div class="card-toolbar">
													<button type="submit" class="btn btn-success mr-2 mb-3 float-right">@lang('Submit')</button>
 												</div>
											</div>
											<!--end::Header-->
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
            <a href="{{route('profil',['id'=>auth()->user()->id])}}" class="text-muted">@lang('Profil')</a>
        </li>
        <li class="breadcrumb-item text-muted">
            <div class="text-muted">@lang('Personal Information')</div>
        </li>
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page Heading-->
@endsection

@section('title')
    {{ config('app.name') }} | @lang('Users Management') | @lang('Profil') | @lang('Personal Information')
@endsection
