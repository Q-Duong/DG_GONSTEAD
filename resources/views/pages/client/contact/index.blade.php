@extends('layouts.default')

@section('title', __('contact.seo.title'))
@section('seo_description', __('contact.seo.description'))

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .apple-contact-card {
            background-color: #f5f5f7;
            border-radius: 20px;
            padding: 30px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 24px;
            transition: all 0.3s ease;
        }

        .apple-contact-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .apple-contact-icon {
            width: 50px;
            height: 50px;
            background-color: #0071e3;
            color: #fff;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .apple-contact-info h4 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 12px;
        }

        .apple-contact-info p {
            color: #495057;
            margin: 0 0 8px 0;
            line-height: 1.6;
        }

        .apple-contact-info p:last-child {
            margin-bottom: 0;
        }

        .apple-form-box {
            background-color: #ffffff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.04);
            border: 1px solid #f0f0f0;
        }

        .apple-form-control {
            background-color: #f5f5f7;
            border: 1px solid transparent;
            border-radius: 12px;
            padding: 16px 20px;
            font-size: 1rem;
            color: #1d1d1f;
            transition: all 0.2s ease;
        }

        .apple-form-control:focus {
            background-color: #fff;
            border-color: #0071e3;
            box-shadow: 0 0 0 4px rgba(0, 113, 227, 0.1);
            outline: none;
        }

        .apple-btn-submit {
            background-color: #0071e3;
            color: #fff;
            border-radius: 980px;
            padding: 16px 30px;
            font-size: 1.05rem;
            font-weight: 600;
            border: none;
            width: 100%;
            transition: all 0.3s ease;
        }

        .apple-btn-submit:hover {
            background-color: #005bb5;
            transform: scale(1.02);
        }

        .apple-map-container {
            border-radius: 20px;
            overflow: hidden;
            height: 350px;
            border: 1px solid #eaeaea;
        }

        .apple-map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto text-center">
                    <h2 class="mb-3 fw-bold">@lang('contact.header.title')</h2>
                    <p class="text-muted" style="font-size: 1.1rem;">@lang('contact.header.subtitle')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-5 col-12 mb-5 mb-lg-0">
                    <h3 class="fw-bold mb-4">@lang('contact.info.heading')</h3>

                    <div class="apple-contact-card">
                        <div class="apple-contact-icon"><i class="bi bi-building"></i></div>
                        <div class="apple-contact-info">
                            <h4 class="text-primary">@lang('contact.info.branch_1.name')</h4>
                            <p><i class="bi bi-pin-map text-muted me-2"></i>@lang('contact.info.branch_1.address')</p>
                            <p><i class="bi bi-telephone text-muted me-2"></i><a href="tel:1900633287"
                                    class="text-decoration-none text-dark fw-bold">@lang('contact.info.branch_1.phone3')</a> - <a
                                    href="tel:0972767973"
                                    class="text-decoration-none text-dark fw-bold">@lang('contact.info.branch_1.phone')</a> - <a
                                    href="tel:0777821112"
                                    class="text-decoration-none text-dark fw-bold">@lang('contact.info.branch_1.phone2')</a></p>
                        </div>
                    </div>

                    <div class="apple-contact-card">
                        <div class="apple-contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div class="apple-contact-info">
                            <h4 class="text-primary">@lang('contact.info.branch_2.name')</h4>
                            <p><i class="bi bi-pin-map text-muted me-2"></i>@lang('contact.info.branch_2.address')</p>
                            <p><i class="bi bi-telephone text-muted me-2"></i><a href="tel:0931711319"
                                    class="text-decoration-none text-dark fw-bold">@lang('contact.info.branch_2.phone')</a> - <a
                                    href="tel:0931731319"
                                    class="text-decoration-none text-dark fw-bold">@lang('contact.info.branch_2.phone2')</a> - <a
                                    href="tel:0931761319"
                                    class="text-decoration-none text-dark fw-bold">@lang('contact.info.branch_2.phone3')</a></p>

                        </div>
                    </div>

                    <div class="apple-contact-card">
                        <div class="apple-contact-icon" style="background-color: #34c759;"><i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="apple-contact-info">
                            <h4>@lang('contact.info.hours_title')</h4>
                            <p>@lang('contact.info.hours_detail')</p>
                        </div>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-lg-6 col-12">
                    <div class="apple-form-box">
                        <h3 class="fw-bold mb-4 text-center">@lang('contact.form.heading')</h3>
                        <div id="ajaxMessage" class="alert d-none mb-4" style="border-radius: 16px;" role="alert"></div>
                        <form id="appointmentForm" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-4 position-relative">
                                <input type="text" class="apple-form-control w-100" name="name"
                                    placeholder="@lang('contact.form.name')">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 position-relative">
                                    <input type="tel" class="apple-form-control w-100" name="phone"
                                        placeholder="@lang('contact.form.phone')">
                                </div>
                                <div class="col-md-6 mb-4 position-relative">
                                    <input type="text" id="appointmentDate" class="apple-form-control w-100" name="date" placeholder="Chọn ngày khám" required>
                                </div>
                            </div>
                            <div class="mb-4 position-relative">
                                <select name="branch" class="apple-form-control w-100">
                                    <option value="" disabled selected>@lang('contact.form.select_branch')</option>
                                    <option value="@lang('contact.info.branch_1.name')">@lang('contact.info.branch_1.name')</option>
                                    <option value="@lang('contact.info.branch_2.name')">@lang('contact.info.branch_2.name')</option>
                                </select>
                            </div>
                            <div class="mb-4 position-relative">
                                <textarea class="apple-form-control w-100" name="message" rows="3" placeholder="@lang('contact.form.message')"></textarea>
                            </div>

                            <button type="submit" id="submitBtn"
                                class="apple-btn-submit d-flex justify-content-center align-items-center gap-2">
                                <span>@lang('contact.form.submit_btn')</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="row mt-5 pt-4">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h5 class="fw-bold mb-3">@lang('contact.info.branch_1.name')</h5>
                        <div class="apple-map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.406329420679!2d106.7556882!3d10.780158799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752500640e2cbf%3A0xda2338d491d15f40!2zQ8ahIHPhu58ga-G7uSB0aHXhuq10IFBIQ04gREcgR29uc3RlYWQ!5e0!3m2!1svi!2s!4v1757240983574!5m2!1svi!2s"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h5 class="fw-bold mb-3">@lang('contact.info.branch_2.name')</h5>
                        <div class="apple-map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2051968873866!2d105.75896900974288!3d20.984410187780774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345348431ba949%3A0xbd97824930ccd540!2sDG%20Gonstead%20HN!5e0!3m2!1svi!2s!4v1786521446204!5m2!1svi!2s"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/vn.js"></script>
    <script src="{{ versionResource('assets/client/js/contact.js') }}" defer></script>
@endpush
