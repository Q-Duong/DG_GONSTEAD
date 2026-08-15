@extends('layouts.default')
@section('title', __('master_pages.seo.title'))
@section('seo_description', __('master_pages.seo.description'))
@push('css')
    {{-- <link rel="stylesheet" href="{{ versionResource('assets/css/main.built.css') }}" type="text/css" as="style" /> --}}
    <style>
        .apple-service-card {
            background-color: #f5f5f7;
            border-radius: 24px;
            overflow: hidden;
            border: none;
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            /* Khử gạch chân của link */
        }

        .apple-service-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            transform: translateY(-8px);
        }

        /* Khung hình ảnh */
        .apple-service-img-wrapper {
            width: 100%;
            height: 240px;
            overflow: hidden;
            position: relative;
        }

        .apple-service-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .apple-service-card:hover .apple-service-img {
            transform: scale(1.05);
        }

        /* Khung nội dung */
        .apple-service-content {
            padding: 35px 30px 30px 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .apple-service-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1d1d1f;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .apple-service-desc {
            color: #495057;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .apple-service-link {
            font-weight: 600;
            color: #0071e3;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: auto;
        }

        .apple-blog-card {
            background-color: #f5f5f7;
            border-radius: 24px;
            overflow: hidden;
            border: none;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .apple-blog-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-5px);
        }

        .apple-blog-img-wrapper {
            width: 100%;
            height: 220px;
            overflow: hidden;
            display: block;
        }

        .apple-blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Chìa khóa giúp ảnh luôn fill đầy khung */
            object-position: center;
            transition: transform 0.5s ease;
            /* Hiệu ứng mượt khi zoom */
        }

        /* Zoom nhẹ ảnh khi hover thẻ */
        .apple-blog-card:hover .apple-blog-img {
            transform: scale(1.05);
        }

        .apple-blog-content {
            padding: 24px 28px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .apple-blog-date {
            font-size: 0.9rem;
            color: #86868b;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .apple-blog-title {
            font-size: 1.35rem;
            font-weight: 600;
            color: #1d1d1f;
            line-height: 1.4;
            margin-bottom: 15px;
            text-decoration: none;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .apple-blog-title:hover {
            color: #0071e3;
        }

        /* Nút đọc thêm */
        .apple-blog-readmore {
            font-weight: 600;
            color: #0071e3;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.95rem;
            margin-top: auto;
            /* Đẩy nút xuống sát đáy thẻ */
        }

        .apple-blog-readmore:hover {
            text-decoration: underline;
        }

        .view-more-wrapper {
            margin-top: 32px;
            font-size: 17px;
            font-weight: 500;
            text-align: center;
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
            color: #fff;
            transform: scale(1.02);
        }

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

        .apple-home-review-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            /* Cực kỳ quan trọng để ảnh bo góc theo viền thẻ */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .apple-home-review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        /* Khung chứa hình ảnh */
        .review-cover-img {
            width: 100%;
            height: 380px;
            position: relative;
            overflow: hidden;
            background-color: #f5f5f7;
        }

        .review-cover-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cắt ảnh vừa vặn, không bị méo */
            object-position: top;
            /* Ưu tiên lấy phần trên của ảnh (hữu ích với ảnh Zalo dài) */
        }

        /* Nhãn tin nhắn */
        .badge-message {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            font-size: 0.75rem;
            padding: 4px 10px;
            border-radius: 980px;
            backdrop-filter: blur(4px);
        }

        /* Phần khung chứa chữ */
        .review-body {
            padding: 30px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        /* Định dạng chữ và Info giữ nguyên sự sang trọng */
        .quote-text {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #1d1d1f;
            font-style: italic;
        }

        .customer-info {
            display: flex;
            align-items: center;
            gap: 15px;
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            background: #0071e3;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .name {
            font-size: 1rem;
            font-weight: 700;
            margin: 0;
            color: #1d1d1f;
        }

        .condition {
            font-size: 0.85rem;
            color: #86868b;
        }

        /* Nút Xem Thêm */
        .btn-see-all-reviews {
            display: inline-flex;
            align-items: center;
            background-color: transparent;
            color: #0071e3;
            font-size: 1.05rem;
            font-weight: 600;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 980px;
            border: 2px solid #0071e3;
            transition: all 0.3s ease;
        }

        .btn-see-all-reviews:hover {
            background-color: #0071e3;
            color: #ffffff;
        }

        .apple-social-card {
            background-color: #f5f5f7;
            border-radius: 24px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            padding-bottom: 0;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .apple-social-card:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
            transform: translateY(-3px);
        }

        .social-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #fff;
            flex-shrink: 0;
        }

        .fb-icon {
            background-color: #1877F2;
        }

        .tiktok-icon {
            background-color: #000000;
        }

        .btn-social-follow {
            padding: 8px 20px;
            border-radius: 980px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .fb-btn {
            background-color: rgba(24, 119, 242, 0.1);
            color: #1877F2;
        }

        .fb-btn:hover {
            background-color: #1877F2;
            color: #fff;
        }

        .tiktok-btn {
            background-color: rgba(0, 0, 0, 0.08);
            color: #000000;
        }

        .tiktok-btn:hover {
            background-color: #000000;
            color: #fff;
        }

        .social-embed-wrapper {
            background-color: #ffffff;
            border-top: 1px solid #e5e5ea;
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 400px;
            width: 100%;
        }

        .social-embed-wrapper iframe {
            display: block;
            margin: 0 auto;
            min-height: 400px !important;
        }

        .tiktok-embed {
            margin: 0 auto !important;
            min-height: 400px !important;
        }



        .apple-bento-card {
            background-color: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .apple-bento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        /* Vùng chứa ảnh */
        .bento-img-wrapper {
            width: 100%;
            position: relative;
            overflow: hidden;
            background-color: #f5f5f7;
        }

        .bento-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Danh sách tự chia 2 cột */
        .bento-list-1-col {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .bento-list-1-col li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 1.05rem;
            color: #424245;
            line-height: 1.5;
        }

        .bento-list-2-cols {
            list-style: none;
            padding: 0;
            margin: 0;
            column-count: 2;
            /* Phép thuật chia 2 cột ở đây */
            column-gap: 40px;
        }

        .bento-list-2-cols li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 1.05rem;
            color: #424245;
            line-height: 1.5;
            break-inside: avoid;
            /* Tránh việc 1 dòng bị cắt nửa giữa 2 cột */
        }

        /* Khi xuống màn hình điện thoại, tự động gom lại thành 1 cột cho dễ đọc */
        @media (max-width: 767px) {
            .bento-list-2-cols {
                column-count: 1;
            }

            .bento-content {
                padding: 25px !important;
            }
        }
    </style>
@endpush
@section('content')
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/client/images/slide/hero_startframe_1.jpg') }}"
                                    class="carousel-image img-fluid" alt="@lang('master_pages.hero.img_alt')">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>@lang('master_pages.hero.title')</h1>
                                    <p>@lang('master_pages.hero.subtitle')</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/client/images/slide/hero_startframe_2.png') }}"
                                    class="carousel-image img-fluid" alt="@lang('master_pages.hero.img_alt')">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>@lang('master_pages.hero.title')</h1>
                                    <p>@lang('master_pages.hero.subtitle')</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/client/images/slide/hero_startframe_3.png') }}"
                                    class="carousel-image img-fluid" alt="@lang('master_pages.hero.img_alt')">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>@lang('master_pages.hero.title')</h1>
                                    <p>@lang('master_pages.hero.subtitle')</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">@lang('master_pages.hero.previous')</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">@lang('master_pages.hero.next')</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                    <video controls autoplay playsinline muted loop class="custom-text-box-image img-fluid"
                        alt="@lang('about_us.introduce')">
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

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="col-lg-8 col-12 mx-auto text-center">
                <h2 class="mb-0">@lang('master_pages.header.service')</h2>
                <p class="text-muted">@lang('master_pages.services.intro_desc')</p>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: #fbfbfd;">
        <div class="container">

            <div class="row g-4">

                <div class="col-lg-4 d-flex">
                    <div class="apple-bento-card w-100">
                        <div class="bento-img-wrapper" style="height: 330px;">
                            <img src="{{ asset('assets/client/images/services/dau-cap.jpg') }}" alt="Đau cấp"
                                class="bento-img">
                        </div>

                        <div class="bento-content" style="padding: 35px 30px; flex-grow: 1;">
                            <h3 class="fw-bold mb-4" style="font-size: 1.4rem; color: #e30000;">
                                <i class="bi bi-lightning-charge-fill me-2"></i>
                                @lang('services.bento.dau-cap.title')
                            </h3>

                            <ul class="bento-list-1-col">
                                @foreach (__('services.bento.dau-cap.items') as $item)
                                    <li>
                                        <i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 d-flex">
                    <div class="apple-bento-card w-100">
                        <div class="bento-img-wrapper" style="height: 330px;">
                            <img src="{{ asset('assets/client/images/services/co-xuong-khop.jpg') }}" alt="Cơ xương khớp"
                                class="bento-img" style="object-position: top">
                        </div>
                        <div class="bento-content" style="padding: 35px 40px;">
                            <h3 class="fw-bold mb-4" style="font-size: 1.4rem; color: #1d1d1f;">
                                @lang('services.bento.man-tinh.title')
                            </h3>

                            <ul class="bento-list-2-cols">
                                @foreach (__('services.bento.man-tinh.items') as $item)
                                    <li>
                                        <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a href="{{ route('services.index') }}"
                        class="btn btn-outline-primary rounded-pill px-4 py-2 fw-bold">
                        @lang('master_pages.button.view_more')
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>@lang('master_pages.header.blog')</h2>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a target="_blank" href="https://suckhoevacongdong.com/dao-anh-dung-nguoi-xay-nen-mong-cho-dieu-tri-cot-song-chuan-muc-tai-viet-namhtml-4877.html?fbclid=IwY2xjawQ3CZdleHRuA2FlbQIxMABicmlkETFmb1lpaFhNWUZISVg1Rm1vc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHhiQ09AgKY_LbdE_7ersmee_MulKuYn0jueFeU9TGDQ2NsCf29Y4DtWZsOZ6_aem_D0EhNPnbJYMAl-qQa-PmyQ">
                                <img src="{{ asset('assets/client/images/news/medium-shot-1.jpg') }}"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        12:18 28/02/2026
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a target="_blank" href="https://suckhoevacongdong.com/dao-anh-dung-nguoi-xay-nen-mong-cho-dieu-tri-cot-song-chuan-muc-tai-viet-namhtml-4877.html?fbclid=IwY2xjawQ3CZdleHRuA2FlbQIxMABicmlkETFmb1lpaFhNWUZISVg1Rm1vc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHhiQ09AgKY_LbdE_7ersmee_MulKuYn0jueFeU9TGDQ2NsCf29Y4DtWZsOZ6_aem_D0EhNPnbJYMAl-qQa-PmyQ" class="news-block-title-link">Đào Anh Dũng - Người xây nền móng cho điều trị cột sống chuẩn mực tại Việt Nam</a></h4>
                            </div>

                            <div class="news-block-body">
                                <p>TRUNG TÂM THÔNG TIN TƯ LIỆU SỨC KHỎE VÀ CỘNG ĐỒNG</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a target="_blank" href="https://phapluatcuocsong.com/dg-gonstead-va-su-menh-phuc-hoi-cot-song-khong-xam-lan-a87734.html?fbclid=IwY2xjawQ3CWZleHRuA2FlbQIxMABicmlkETFmb1lpaFhNWUZISVg1Rm1vc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHhiQ09AgKY_LbdE_7ersmee_MulKuYn0jueFeU9TGDQ2NsCf29Y4DtWZsOZ6_aem_D0EhNPnbJYMAl-qQa-PmyQ">
                                <img src="{{ asset('assets/client/images/news/medium-shot-2.png') }}"
                                    class="news-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        16:43 24/03/2026
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a target="_blank" href="https://phapluatcuocsong.com/dg-gonstead-va-su-menh-phuc-hoi-cot-song-khong-xam-lan-a87734.html?fbclid=IwY2xjawQ3CWZleHRuA2FlbQIxMABicmlkETFmb1lpaFhNWUZISVg1Rm1vc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHhiQ09AgKY_LbdE_7ersmee_MulKuYn0jueFeU9TGDQ2NsCf29Y4DtWZsOZ6_aem_D0EhNPnbJYMAl-qQa-PmyQ" class="news-block-title-link">DG Gonstead và sứ mệnh phục hồi cột sống không xâm lấn</a>
                                </h4>
                            </div>

                            <div class="news-block-body">
                                <p>TRANG THÔNG TIN TRUYỀN THÔNG PHÁP LUẬT & CUỘC SỐNG</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="view-more-wrapper">
                    <a href="{{ route('blog.index') }}" class="apple-btn-submit" previewlistener="true">
                        @lang('master_pages.button.view_more')</a>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: #fbfbfd;">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2.2rem; color: #1d1d1f; letter-spacing: -0.5px;">
                        @lang('master_pages.testimonials.title')
                    </h2>
                    <p class="text-muted mt-2" style="font-size: 1.1rem;">
                        @lang('master_pages.testimonials.subtitle')
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($testimonials as $review)
                    <div class="col-lg-4 col-md-6 mb-4 d-flex">
                        <div class="apple-home-review-card w-100">

                            @if ($review->image)
                                <div class="review-cover-img">
                                    <img src="{{ asset('storage/' . $review->image) }}" alt="{{ $review->name }}">
                                    @if ($review->image_type == 'screenshot')
                                        <span class="badge-message"><i class="bi bi-chat-dots"></i> Tin nhắn</span>
                                    @endif
                                </div>
                            @endif

                            <div class="review-body">
                                @if (!empty($review->content))
                                    <div class="quote-text flex-grow-1">
                                        "{{ Str::limit($review->content, 110, '...') }}"
                                    </div>
                                @endif


                                <div class="customer-info mt-4">
                                    <div class="avatar">{{ mb_substr($review->name, 0, 1) }}</div>
                                    <div class="details">
                                        <h5 class="name">{{ $review->name }}</h5>
                                        <span class="condition">{{ $review->condition }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="{{ route('testimonials.index') }}" class="btn-see-all-reviews">
                        @lang('master_pages.testimonials.button') <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="contact-section section-padding">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-12 col-12 mb-5">
                    <h2>@lang('master_pages.header.contact')</h2>
                </div>



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
                        <div class="apple-contact-icon" style="background-color: #34c759;"><i
                                class="bi bi-clock-fill"></i>
                        </div>
                        <div class="apple-contact-info">
                            <h4>@lang('contact.info.hours_title')</h4>
                            <p>@lang('contact.info.hours_detail')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="apple-form-box">
                        <h3 class="fw-bold mb-4 text-center">@lang('contact.form.heading')</h3>
                        <div id="ajaxMessage" class="alert d-none mb-4" style="border-radius: 16px;" role="alert">
                        </div>
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
                                    <input type="date" class="apple-form-control w-100" name="date">
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


                <div class="mt-5 pt-4">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h5 class="fw-bold mb-3">@lang('contact.info.branch_1.name')</h5>
                            <div class="apple-map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.406329420679!2d106.7556882!3d10.780158799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752500640e2cbf%3A0xda2338d491d15f40!2zQ8ahIHPhu58ga-G7uSB0aHXhuq10IFBIQ04gREcgR29uc3RlYWQ!5e0!3m2!1svi!2s!4v1757240983574!5m2!1svi!2s"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="fw-bold mb-3">@lang('contact.info.branch_2.name')</h5>
                            <div class="apple-map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2051968873866!2d105.75896900974288!3d20.984410187780774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345348431ba949%3A0xbd97824930ccd540!2sDG%20Gonstead%20HN!5e0!3m2!1svi!2s!4v1786521446204!5m2!1svi!2s"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: #ffffff;">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="font-size: 2.2rem; color: #1d1d1f; letter-spacing: -0.5px;">
                        @lang('master_pages.social.title')
                    </h2>
                    <p class="text-muted mt-2" style="font-size: 1.1rem;">
                        @lang('master_pages.social.subtitle')
                    </p>
                </div>
            </div>

            <div class="row justify-content-center gap-lg-4">

                <div class="col-lg-5 col-md-6 col-12 mb-4 d-flex">
                    <div class="apple-social-card w-100">
                        <div class="social-header px-4 pt-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="social-icon fb-icon"><i class="bi bi-facebook"></i></div>
                                <div>
                                    <h4 class="mb-0 fw-bold fs-5">@lang('master_pages.social.fb_title')</h4>
                                    <span class="text-muted" style="font-size: 0.85rem;">@lang('master_pages.social.fb_desc')</span>
                                </div>
                            </div>
                            <a href="https://www.facebook.com/profile.php?id=61554579022426" target="_blank"
                                class="btn-social-follow fb-btn">
                                @lang('master_pages.social.follow_fb')
                            </a>
                        </div>

                        <div class="social-embed-wrapper mt-4">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61554579022426&tabs=timeline&width=400&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="100%" height="400"
                                style="border:none;overflow:hidden; width:100%; max-width:400px;" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 mb-4 d-flex">
                    <div class="apple-social-card w-100">
                        <div class="social-header px-4 pt-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="social-icon tiktok-icon"><i class="bi bi-tiktok"></i></div>
                                <div>
                                    <h4 class="mb-0 fw-bold fs-5">@lang('master_pages.social.tiktok_title')</h4>
                                    <span class="text-muted" style="font-size: 0.85rem;">@lang('master_pages.social.tiktok_desc')</span>
                                </div>
                            </div>
                            <a href="https://www.tiktok.com/@dunggonstead" target="_blank"
                                class="btn-social-follow tiktok-btn">
                                @lang('master_pages.social.follow_tiktok')
                            </a>
                        </div>

                        <div class="social-embed-wrapper mt-4">
                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@dunggonstead"
                                data-unique-id="dunggonstead" data-embed-type="creator"
                                style="max-width: 100%; min-width: 288px; width: 100%; margin: 0; padding: 0;">
                                <section>
                                    <a target="_blank"
                                        href="https://www.tiktok.com/@dunggonstead?refer=creator_embed">@dunggonstead</a>
                                </section>
                            </blockquote>
                            <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ versionResource('assets/client/js/contact.js') }}" defer></script>
@endpush
