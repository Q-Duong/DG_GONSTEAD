@extends('layouts.default')
@section('title', __('team.seo.title'))
@section('seo_description', __('team.seo.description'))
@push('css')
    <style>
        .expert-avatar {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
        }

        .expert-social-links a {
            display: inline-block;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            background: #f0f8ff;
            color: #0056b3;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .expert-social-links a:hover {
            background: #0056b3;
            color: #fff;
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

        .apple-style-card {
            background-color: #f5f5f7;
            /* Màu nền xám nhạt */
            border-radius: 28px;
            /* Bo góc to */
            padding: 24px;
            text-align: center;
            border: none;
            transition: all 0.3s ease;
        }

        .apple-style-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
        }

        .apple-style-img {
            border-radius: 20px;
            width: 100%;
            height: 320px;
            object-fit: cover;
            margin-bottom: 24px;
        }

        .apple-btn-primary {
            background-color: #0071e3;
            /* Màu xanh đặc trưng */
            color: #fff;
            border-radius: 980px;
            /* Nút hình viên thuốc */
            padding: 8px 22px;
            border: none;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .apple-btn-primary:hover {
            background-color: #0077ed;
            color: #fff;
        }

        .apple-link {
            color: #0071e3;
            text-decoration: none;
            font-weight: 400;
            font-size: 1.05rem;
        }

        .apple-link:hover {
            text-decoration: underline;
        }

        /* Bo góc tổng thể cho Modal */
        .custom-modal-content {
            border-radius: 24px;
            border: none;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Khu vực cuộn nội dung bên phải */
        .modal-scrollable-content {
            max-height: 60vh;
            /* Giới hạn chiều cao để tạo thanh cuộn */
            overflow-y: auto;
            padding-right: 15px;
            /* Khoảng cách với thanh cuộn */
        }

        /* Tùy chỉnh thanh cuộn cho mượt mà (chỉ hiển thị mỏng nhẹ) */
        .modal-scrollable-content::-webkit-scrollbar {
            width: 6px;
        }

        .modal-scrollable-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .modal-scrollable-content::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .modal-scrollable-content::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Cố định ảnh đại diện bên trái trên màn hình lớn */
        @media (min-width: 768px) {
            .sticky-avatar {
                position: sticky;
                top: 0;
            }
        }

        /* Nút tắt Modal tròn trịa */
        .btn-close-custom {
            background-color: #f5f5f7;
            border-radius: 50%;
            padding: 12px;
            opacity: 0.8;
            transition: all 0.2s;
        }

        .btn-close-custom:hover {
            opacity: 1;
            background-color: #e5e5ea;
        }
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto text-center">
                    <h2 class="mb-3">@lang('team.header.title')</h2>
                    <p class="text-muted">@lang('team.header.description')</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/client/images/team/dao-anh-dung.jpg') }}"
                        class="expert-avatar img-fluid shadow-lg" alt="@lang('team.lead.img_alt')">
                </div>

                <div class="col-lg-7 col-12 ms-auto">
                    <div class="custom-text-box mb-0">
                        <h6 class="text-primary text-uppercase mb-2">@lang('team.lead.role')</h6>
                        <h2 class="mb-3">@lang('team.lead.name')</h2>

                        <div class="mb-4">
                            <span class="eeat-badge"><i class="bi-award me-1"></i> @lang('team.lead.badges.cert')</span>
                            <span class="eeat-badge"><i class="bi-clock-history me-1"></i> @lang('team.lead.badges.exp')</span>
                            <span class="eeat-badge"><i class="bi-shield-check me-1"></i> @lang('team.lead.badges.license')</span>
                        </div>

                        <p class="mb-3">
                            {!! __('team.lead.description') !!}
                        </p>

                        <ul class="custom-list mt-3 mb-4">
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                @lang('team.lead.list.item1')
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                @lang('team.lead.list.item2')
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class="bi-check-circle-fill custom-text-box-icon me-2 text-success"></i>
                                @lang('team.lead.list.item3')
                            </li>
                        </ul>

                        <div class="expert-social-links">
                            <a href="#" title="@lang('team.lead.social.linkedin')"><i class="bi-linkedin"></i></a>
                            <a href="#" title="@lang('team.lead.social.news')"><i class="bi-newspaper"></i></a>
                            <a href="#" title="@lang('team.lead.social.cert')"><i class="bi-file-earmark-medical"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section-padding section-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h3 class="mb-2">@lang('team.members.title')</h3>
                    <p class="text-muted">@lang('team.members.description')</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="apple-style-card">
                        <img src="{{ asset('assets/client/images/team/doctor-1.jpg') }}" class="apple-style-img img-fluid"
                            alt="@lang('team.members.doc1.img_alt')">
                        <h4 class="fw-bold mb-2">@lang('team.members.doc1.name')</h4>
                        <p class="text-dark mb-1">@lang('team.members.doc1.spec')</p>
                        <p class="text-muted small mb-4">@lang('team.members.doc1.desc')</p>
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <button type="button" class="apple-btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalDoctor1">
                                @lang('team.members.btn_detail')
                            </button>
                            <a href="{{ route('contact.index') }}" class="apple-link">
                                Đặt lịch <i class="bi bi-chevron-right" style="font-size: 0.8em; font-weight: bold;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="apple-style-card">
                        <img src="{{ asset('assets/client/images/team/doctor-1.jpg') }}" class="apple-style-img img-fluid"
                            alt="@lang('team.members.doc2.img_alt')">
                        <h4 class="fw-bold mb-2">@lang('team.members.doc2.name')</h4>
                        <p class="text-dark mb-1">@lang('team.members.doc2.spec')</p>
                        <p class="text-muted small mb-4">@lang('team.members.doc2.desc')</p>
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <button type="button" class="apple-btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalDoctor2">
                                @lang('team.members.btn_detail')
                            </button>
                            <a href="{{ route('contact.index') }}" class="apple-link">
                                Đặt lịch <i class="bi bi-chevron-right" style="font-size: 0.8em; font-weight: bold;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="apple-style-card">
                        <img src="{{ asset('assets/client/images/team/doctor-1.jpg') }}" class="apple-style-img img-fluid"
                            alt="@lang('team.members.doc3.img_alt')">
                        <h4 class="fw-bold mb-2">@lang('team.members.doc3.name')</h4>
                        <p class="text-dark mb-1">@lang('team.members.doc3.spec')</p>
                        <p class="text-muted small mb-4">@lang('team.members.doc3.desc')</p>
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <button type="button" class="apple-btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalDoctor3">
                                @lang('team.members.btn_detail')
                            </button>
                            <a href="{{ route('contact.index') }}" class="apple-link">
                                Đặt lịch <i class="bi bi-chevron-right" style="font-size: 0.8em; font-weight: bold;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <h3 class="mb-3">@lang('team.trust.title')</h3>
                    <p>@lang('team.trust.description')</p>

                    <div class="d-flex mt-4">
                        <div class="me-4">
                            <h2 class="text-primary mb-0">100%</h2>
                            <p class="text-muted">@lang('team.trust.stat1')</p>
                        </div>
                        <div class="me-4">
                            <h2 class="text-primary mb-0">10k+</h2>
                            <p class="text-muted">@lang('team.trust.stat2')</p>
                        </div>
                        <div>
                            <h2 class="text-primary mb-0">0</h2>
                            <p class="text-muted">@lang('team.trust.stat3')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 ms-auto">
                    <img src="{{ asset('assets/client/images/home-pages/the-synergy.webp') }}" class="img-fluid rounded"
                        style="box-shadow: 0 5px 15px rgba(0,0,0,0.1);" alt="@lang('team.trust.img_alt')">
                </div>
            </div>
        </div>
    </section>

    @include('layouts.section.client.team_experts.modal1')
    @include('layouts.section.client.team_experts.modal2')
    @include('layouts.section.client.team_experts.modal3')
@endsection
