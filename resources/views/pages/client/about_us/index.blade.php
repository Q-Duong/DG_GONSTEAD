@extends('layouts.default')
@section('title', __('about_us.seo.title'))
@section('seo_description', __('about_us.seo.description'))
@section('content')
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                    <video controls autoplay playsinline muted loop class="custom-text-box-image img-fluid"
                        alt="@lang('about_us.video_alt')">
                        <source src="{{ asset('storage/DG-Gonstead.mp4') }}" type="video/mp4">
                        <source src="{{ asset('storage/DG-Gonstead.mp4') }}" type="video/ogg">
                        <source src="{{ asset('storage/DG-Gonstead.mp4') }}" type="video/webm">
                    </video>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">@lang('master_pages.header.aboutUs')</h2>

                        <h5 class="mb-3">@lang('about_us.intro.company_name')</h5>

                        <p class="mb-0">@lang('about_us.intro.desc')</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">@lang('about_us.mission.title')</h5>

                                <p>@lang('about_us.mission.desc')</p>

                                <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        @lang('about_us.mission.items.1')
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        @lang('about_us.mission.items.2')
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        @lang('about_us.mission.items.3')
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        @lang('about_us.mission.items.4')
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="2024" data-speed="1000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">@lang('about_us.stats.establish')</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="30" data-speed="1000"></span>
                                        <span class="counter-number-text">+</span>
                                    </div>

                                    <span class="counter-text">@lang('about_us.stats.staff')</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="10000"
                                            data-speed="1000"></span>
                                        <span class="counter-number-text">+</span>
                                    </div>

                                    <span class="counter-text">@lang('about_us.stats.patient')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-padding section-bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-6 col-12 order-2 order-md-2 order-lg-1 ms-auto mb-4 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>@lang('about_us.philosophy.title')</h2>
                        <div class="contact-info">
                            <p class="d-flex mb-2">
                                @lang('about_us.philosophy.desc')
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 order-1 order-md-1 order-lg-2 mb-4">
                    <img src="{{ asset('assets/client/images/home-pages/the-synergy.webp') }}"
                        class="custom-text-box-image img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5 col-12">
                    <img src="{{ asset('assets/client/images/home-pages/the-blielf.jpg') }}"
                        class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>@lang('about_us.beliefs.title')</h2>

                        <div class="contact-info">
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.1')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.2')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.3')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.4')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.5')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.6')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.7')
                            </p>
                            <p class="d-flex mb-3">
                                @lang('about_us.beliefs.items.8')
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection