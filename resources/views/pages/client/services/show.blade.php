@extends('layouts.default')

{{-- Tối ưu SEO động theo từng Dịch vụ --}}
@section('title', __('services.list.' . $slug . '.title') . ' | DG Gonstead')
@section('seo_description', __('services.list.' . $slug . '.desc'))

@push('css')
    <style>
        /* Banner Cover cho dịch vụ */
        .service-hero-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 24px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* Nội dung bài viết dịch vụ */
        .service-article {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #1d1d1f;
        }
        .service-article h2, .service-article h3 {
            font-weight: 700;
            color: #1d1d1f;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .service-article ul {
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .service-article li {
            margin-bottom: 0.5rem;
        }

        /* Sidebar - Khung Apple Style */
        .apple-sidebar-card {
            background-color: #f5f5f7;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 25px;
        }
        .apple-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1d1d1f;
            border-bottom: 2px solid #e5e5ea;
            padding-bottom: 10px;
        }

        /* Danh sách dịch vụ ở Sidebar */
        .sidebar-service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar-service-item {
            margin-bottom: 12px;
        }
        .sidebar-service-link {
            color: #495057;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            transition: color 0.2s;
        }
        .sidebar-service-link i {
            color: #0071e3;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .sidebar-service-link:hover, .sidebar-service-link.active {
            color: #0071e3;
        }

        /* Hộp Liên hệ nhanh */
        .quick-contact-box {
            background: linear-gradient(135deg, #0071e3 0%, #005bb5 100%);
            color: #fff;
            border-radius: 20px;
            padding: 30px 25px;
            text-align: center;
        }
        .quick-contact-box h4 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .quick-contact-box p {
            color: #fff;
        }
        .btn-white-pill {
            background-color: #fff;
            color: #0071e3;
            border-radius: 980px;
            padding: 12px 25px;
            font-weight: 600;
            display: inline-block;
            text-decoration: none;
            margin-top: 15px;
            transition: transform 0.2s;
        }
        .btn-white-pill:hover {
            transform: scale(1.05);
            color: #005bb5;
        }
    </style>
@endpush

@section('content')
    <section class="section-padding pb-0 mt-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}" class="text-decoration-none">@lang('master_pages.header.home')</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}" class="text-decoration-none">@lang('services.header.title')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('services.list.' . $slug . '.title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="section-padding pt-2">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/client/images/services/' . $slug . '.jpg') }}" 
                         class="service-hero-img" 
                         alt="{{ __('services.list.' . $slug . '.title') }}">

                    <h1 class="fw-bold mb-4" style="font-size: 2.2rem;">{{ __('services.list.' . $slug . '.title') }}</h1>

                    <p class="lead fw-bold text-primary mb-4">
                        {{ __('services.list.' . $slug . '.desc') }}
                    </p>

                    <div class="service-article">
                        {!! __('services.list.' . $slug . '.content') !!}
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    
                    <div class="apple-sidebar-card">
                        <h3 class="apple-sidebar-title">@lang('services.sidebar.other_services')</h3>
                        <ul class="sidebar-service-list">
                            @foreach (__('services.list') as $key => $service)
                                <li class="sidebar-service-item">
                                    <a href="{{ route('services.show', $key) }}" 
                                       class="sidebar-service-link {{ $slug == $key ? 'active' : '' }}">
                                        {{ $service['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="quick-contact-box">
                        <h4>@lang('services.sidebar.need_help')</h4>
                        <p class="mb-0" style="opacity: 0.9; font-size: 0.95rem;">@lang('services.sidebar.help_desc')</p>
                        <a href="{{ route('contact.index') }}" class="btn-white-pill">
                            @lang('services.sidebar.book_btn')
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection