@extends('layouts.default')

@section('title', __('services.seo.title'))
@section('seo_description', __('services.seo.description'))

@push('css')
    <style>
        .apple-bento-card {
        background-color: #ffffff;
        border-radius: 28px;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .apple-bento-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }

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

    .bento-content {
        display: flex;
        flex-direction: column;
    }

    /* Danh sách 1 cột (Bên trái) */
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

    /* Danh sách 2 cột (Bên phải) */
    .bento-list-2-cols {
        list-style: none;
        padding: 0;
        margin: 0;
        column-count: 2;
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
    }

    @media (max-width: 767px) {
        .bento-list-2-cols { column-count: 1; }
        .bento-content { padding: 25px !important; }
    }

    /* 2. CSS CHO KHỐI CTA ĐÁY TRANG */
    .apple-cta-box {
        background-color: #ffffff;
        border-radius: 28px;
        padding: 60px 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.04);
        border: 1px solid rgba(0,0,0,0.03);
    }

    .btn-apple-primary {
        display: inline-flex;
        align-items: center;
        background-color: #0071e3;
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        padding: 14px 36px;
        border-radius: 980px;
        transition: all 0.3s ease;
    }
    
    .btn-apple-primary:hover {
        background-color: #005bb5;
        color: #ffffff;
        transform: scale(1.02);
    }
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto text-center">
                    <h2 class="mb-3 fw-bold">@lang('services.header.title')</h2>
                    <p class="text-muted" style="font-size: 1.15rem;">@lang('master_pages.services.intro_desc')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: #fbfbfd;">
        <div class="container">
            
            <div class="row g-4 mb-5">
                <div class="col-lg-4 d-flex">
                    <div class="apple-bento-card w-100">
                        <div class="bento-img-wrapper" style="height: 320px;">
                            <img src="{{ asset('assets/client/images/services/dau-cap.jpg') }}" alt="Đau cấp" class="bento-img">
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
                        <div class="bento-img-wrapper" style="height: 320px;">
                            <img src="{{ asset('assets/client/images/services/co-xuong-khop.jpg') }}" alt="Cơ xương khớp" class="bento-img" style="object-position: top;">
                        </div>
                        <div class="bento-content" style="padding: 35px 40px; flex-grow: 1;">
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

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <p class="text-muted fst-italic" style="font-size: 1.15rem;">
                        @lang('services.note')
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="apple-cta-box text-center">
                        <h2 class="fw-bold mb-3" style="color: #1d1d1f; font-size: 2rem; letter-spacing: -0.5px;">
                            @lang('services.cta.title')
                        </h2>
                        <p class="text-muted mb-4" style="font-size: 1.1rem;">
                            @lang('services.cta.desc')
                        </p>
                        <a href="{{ route('contact.index') }}" class="btn-apple-primary">
                            @lang('services.cta.button')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection