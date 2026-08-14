@extends('layouts.default')
@section('title', __('legal.seo.title'))
@section('seo_description', __('legal.seo.description'))
@push('css')
    <style>
        .license-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .eeat-badge {
            display: inline-block;
            padding: 5px 12px;
            background: #e9ecef;
            color: #495057;
            font-size: 0.85rem;
            border-radius: 20px;
            margin-bottom: 10px;
            margin-right: 5px;
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto text-center">
                    <h2 class="mb-3">@lang('legal.header.title')</h2>
                    <p class="text-muted">@lang('legal.header.desc')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mb-5">
                    <h3 class="mb-2">@lang('legal.header.title_hcm')</h3>
                </div>

                <div class="col-lg-7 col-12 ms-auto">
                    <div class="custom-text-box mb-0">
                        <h2 class="mb-3">@lang('legal.medical.title')</h2>

                        <div class="mb-4">
                            <span class="eeat-badge"><i class="bi-shield-check me-1"></i> @lang('legal.business.badges.b1')</span>
                            <span class="eeat-badge"><i class="bi-file-earmark-text me-1"></i> @lang('legal.business.badges.b2')</span>
                            <span class="eeat-badge"><i class="bi-check2-circle me-1"></i> @lang('legal.business.badges.b3')</span>
                        </div>

                        <p class="mb-3">
                            @lang('legal.business.desc')
                        </p>

                        <ul class="custom-list mt-3 mb-4">
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical.medical_name')</strong> {!! __('legal.medical.medical_name_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical.license_no')</strong> {!! __('legal.medical.license_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical.date')</strong> {!! __('legal.medical.date_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical.scope')</strong> {!! __('legal.medical.scope_val') !!}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/client/images/legal/CDHA_GPHD.jpg') }}" class="license-image img-fluid"
                        alt="Giấy phép kinh doanh">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12 mb-lg-0 ">
                    <img src="{{ asset('assets/client/images/legal/GPSG3.jpg') }}" class="license-image img-fluid"
                        alt="Giấy phép y tế">
                </div>
                <div class="col-lg-6 col-12 mb-4 ms-auto">
                    <h3 class="mb-3">@lang('legal.medical2.title')</h3>
                    <p class="mb-4">@lang('legal.medical2.desc')</p>

                    <ul class="custom-list mb-4">
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical2.medical_name')</strong> {!! __('legal.medical2.medical_name_val') !!}
                        </li>
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical2.license_no')</strong> {!! __('legal.medical2.license_val') !!}
                        </li>
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical2.date')</strong> {!! __('legal.medical2.date_val') !!}
                        </li>
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical2.scope')</strong> {!! __('legal.medical2.scope_val') !!}
                        </li>
                    </ul>

                    <p class="text-muted" style="font-style: italic;">@lang('legal.medical.commit')</p>

                    <div class="d-flex mt-4 border-top pt-4">
                        <div class="me-4">
                            <h2 class="text-primary mb-0">@lang('legal.medical.stat1_num')</h2>
                            <p class="text-muted">@lang('legal.medical.stat1_text')</p>
                        </div>
                        <div class="me-4">
                            <h2 class="text-primary mb-0">@lang('legal.medical.stat2_num')</h2>
                            <p class="text-muted">@lang('legal.medical.stat2_text')</p>
                        </div>
                        <div>
                            <h2 class="text-primary mb-0">@lang('legal.medical.stat3_num')</h2>
                            <p class="text-muted">@lang('legal.medical.stat3_text')</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12 ms-auto">
                    <div class="custom-text-box mb-0">
                        <h2 class="mb-3">@lang('legal.medical3.title')</h2>

                        <div class="mb-4">
                            <span class="eeat-badge"><i class="bi-shield-check me-1"></i> @lang('legal.business.badges.b1')</span>
                            <span class="eeat-badge"><i class="bi-file-earmark-text me-1"></i> @lang('legal.business.badges.b2')</span>
                            <span class="eeat-badge"><i class="bi-check2-circle me-1"></i> @lang('legal.business.badges.b3')</span>
                        </div>

                        <p class="mb-3">
                            @lang('legal.business.desc')
                        </p>

                        <ul class="custom-list mt-3 mb-4">
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical3.medical_name')</strong> {!! __('legal.medical3.medical_name_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical3.license_no')</strong> {!! __('legal.medical3.license_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical3.date')</strong> {!! __('legal.medical3.date_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical3.scope')</strong> {!! __('legal.medical3.scope_val') !!}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/client/images/legal/PHCN_GPHD.jpg') }}" class="license-image img-fluid"
                        alt="Giấy phép kinh doanh">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mb-5">
                    <h3 class="mb-2">@lang('legal.header.title_hn')</h3>
                </div>

                <div class="col-lg-7 col-12 ms-auto">
                    <div class="custom-text-box mb-0">
                        <h2 class="mb-3">@lang('legal.medical.title')</h2>

                        <div class="mb-4">
                            <span class="eeat-badge"><i class="bi-shield-check me-1"></i> @lang('legal.business.badges.b1')</span>
                            <span class="eeat-badge"><i class="bi-file-earmark-text me-1"></i> @lang('legal.business.badges.b2')</span>
                            <span class="eeat-badge"><i class="bi-check2-circle me-1"></i> @lang('legal.business.badges.b3')</span>
                        </div>

                        <p class="mb-3">
                            @lang('legal.business.desc')
                        </p>

                        <ul class="custom-list mt-3 mb-4">
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical4.medical_name')</strong> {!! __('legal.medical4.medical_name_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical4.license_no')</strong> {!! __('legal.medical4.license_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical4.date')</strong> {!! __('legal.medical4.date_val') !!}
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                <strong>@lang('legal.medical4.scope')</strong> {!! __('legal.medical4.scope_val') !!}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/client/images/legal/GPHĐ-CSĐA-DG-HN.jpg') }}" class="license-image img-fluid"
                        alt="Giấy phép kinh doanh">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12 mb-lg-0 ">
                    <img src="{{ asset('assets/client/images/legal/GPHĐ-KCB-DG-HN.jpg') }}" class="license-image img-fluid"
                        alt="Giấy phép y tế">
                </div>
                <div class="col-lg-6 col-12 mb-4 ms-auto">
                    <h3 class="mb-3">@lang('legal.medical5.title')</h3>
                    <p class="mb-4">@lang('legal.medical5.desc')</p>

                    <ul class="custom-list mb-4">
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical5.medical_name')</strong> {!! __('legal.medical5.medical_name_val') !!}
                        </li>
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical5.license_no')</strong> {!! __('legal.medical5.license_val') !!}
                        </li>
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical5.date')</strong> {!! __('legal.medical5.date_val') !!}
                        </li>
                        <li class="custom-list-item d-flex mb-2">
                            <i class="bi-caret-right-fill custom-text-box-icon me-2 text-primary"></i>
                            <strong>@lang('legal.medical5.scope')</strong> {!! __('legal.medical5.scope_val') !!}
                        </li>
                    </ul>

                    <p class="text-muted" style="font-style: italic;">@lang('legal.medical.commit')</p>

                    <div class="d-flex mt-4 border-top pt-4">
                        <div class="me-4">
                            <h2 class="text-primary mb-0">@lang('legal.medical.stat1_num')</h2>
                            <p class="text-muted">@lang('legal.medical.stat1_text')</p>
                        </div>
                        <div class="me-4">
                            <h2 class="text-primary mb-0">@lang('legal.medical.stat2_num')</h2>
                            <p class="text-muted">@lang('legal.medical.stat2_text')</p>
                        </div>
                        <div>
                            <h2 class="text-primary mb-0">@lang('legal.medical.stat3_num')</h2>
                            <p class="text-muted">@lang('legal.medical.stat3_text')</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
