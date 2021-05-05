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
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::List Widget 10-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0">
                                    <h3 class="card-title font-weight-bolder text-dark">Notifications</h3>
                                    <div class="card-toolbar">
                                        <div class="dropdown dropdown-inline">
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-bold-more-ver"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Naviigation-->
                                                <ul class="navi">
                                                    <li class="navi font-weight-bold  text-center">
                                                        <a class="btn mt-2 mb-2 btn-light-primary font-weight-bolder btn-sm" href="#">@lang('mark as read')</a>
                                                    </li>
                                                </ul>
                                                <!--end::Naviigation-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Daily Standup Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-primary label-inline font-weight-bold py-4">Approved</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Group Town Hall Meet-up with showcase</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Next sprint planning and estimations</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-success label-inline font-weight-bold py-4">Success</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sprint delivery and project deployment</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Rejected</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end: Item-->
                                    <!--begin: Item-->
                                    <div class="">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Data analytics research showcase</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end: Item-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end: Card-->
                            <!--end: List Widget 10-->
                        </div>
                    </div>
                    <!--end::Row-->

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
            <div class="text-muted">@lang('Overview')</div>
        </li>
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page Heading-->
@endsection

@section('title')
    {{ config('app.name') }} | @lang('Users Management') | @lang('Profil') | @lang('Overview')
@endsection




