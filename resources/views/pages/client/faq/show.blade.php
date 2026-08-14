@extends('layouts.default')

@section('title', __('faq.questions.' . $slug . '.seo_title'))
@section('seo_description', __('faq.questions.' . $slug . '.seo_description'))
@section('seo_keywords', __('faq.questions.' . $slug . '.seo_keywords', ['fallback' => 'Gonstead, nắn chỉnh cột sống']))
@push('css')
    <style>
        .article-content { font-size: 1.15rem; line-height: 1.85; color: #1d1d1f; }
        .article-content h2, .article-content h3 { margin-top: 2.5rem; margin-bottom: 1rem; font-weight: 700; color: #1d1d1f; }
        .breadcrumb-custom { font-size: 0.95rem; margin-bottom: 2rem; }
        .breadcrumb-custom a { color: #0071e3; text-decoration: none; }
        .breadcrumb-custom a:hover { text-decoration: underline; }
        .author-box { background: #f8f9fa; border-radius: 16px; padding: 20px; display: flex; align-items: center; margin: 30px 0; border: 1px solid #eaeaea; }
        .disclaimer-box { font-size: 0.9rem; color: #86868b; border-top: 1px solid #d2d2d7; padding-top: 20px; margin-top: 40px; font-style: italic; }
    </style>
@endpush


@section('content')
    {{-- 2. Phần nội dung hiển thị chính của trang --}}
    <section class="section-padding pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    
                    {{-- Breadcrumb SEO --}}
                    <nav aria-label="breadcrumb" class="breadcrumb-custom">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">@lang('master_pages.header.home')</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('faq.index') }}">@lang('faq.header.title')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('faq.questions.' . $slug . '.question') }}
                            </li>
                        </ol>
                    </nav>

                    {{-- Tiêu đề H1 lớn --}}
                    <h1 class="fw-bold mb-4" style="font-size: 2.2rem; line-height: 1.4;">
                        {{ __('faq.questions.' . $slug . '.question') }}
                    </h1>

                    <div class="d-flex align-items-center text-muted mb-4 pb-4 border-bottom">
                        <i class="bi bi-calendar-event me-2"></i> 
                        <span class="me-4">{{ __('faq.questions.' . $slug . '.date') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    
                    <div class="article-content">
                        {{-- Phần tóm tắt vấn đề --}}
                        <div class="lead mb-4" style="font-size: 1.25rem; font-weight: 500;">
                            {!! __('faq.questions.' . $slug . '.short_answer') !!}
                        </div>

                        {{-- Khối chuyên gia tham vấn (Tăng tính minh bạch và E-E-A-T) --}}
                        <div class="author-box">
                            <img src="{{ asset('assets/images/logo/dg-gonstead-logo.png') }}" 
                                 class=" me-3" style="width: 80px; height: 60px; object-fit: cover;" 
                                 alt="@lang('faq.meta.author')">
                            <div>
                                <small class="text-muted d-block">@lang('faq.meta.author_label')</small>
                                <strong class="text-dark d-block">@lang('faq.meta.author')</strong>
                            </div>
                        </div>

                        {{-- Render chi tiết nội dung phân tích phòng thủ từ file ngôn ngữ --}}
                        {!! __('faq.questions.' . $slug . '.full_content') !!}
                    </div>

                    {{-- Khuyến cáo y tế --}}
                    <div class="disclaimer-box">
                        @lang('faq.meta.disclaimer')
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Khối Schema Article động phục vụ riêng cho Googlebot đi kèm ở cuối trang --}}
    @php
        $articleSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => __('faq.questions.' . $slug . '.question'),
            'datePublished' => __('faq.questions.' . $slug . '.date'),
            'author' => [
                '@type' => 'Person',
                'name' => __('faq.meta.author')
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'DG Gonstead'
            ]
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($articleSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endpush