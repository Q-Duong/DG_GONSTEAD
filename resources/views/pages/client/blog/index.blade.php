@extends('layouts.default')
@section('title', __('blog.seo.title'))
@section('seo_description', __('blog.seo.description'))

@push('css')
    <style>
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
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-0">@lang('master_pages.header.blog')</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section section-padding" id="section_news_list">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $key => $blog)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                        <div class="apple-blog-card w-100">
                            <a href="{{ route('blog.detail', $blog->blog_slug) }}" class="apple-blog-img-wrapper">
                                <img src="{{ asset('assets/client/images/news/medium-shot-1.jpg') }}" class="apple-blog-img"
                                    alt="{{ $blog->blog_title }}">
                            </a>

                            <div class="apple-blog-content">
                                <div>
                                    <div class="apple-blog-date">
                                        <i class="bi-calendar-event me-2"></i>
                                        {{ App::getLocale() == 'en' ? $blog->created_at->locale('en')->isoFormat('MMMM D, YYYY') : $blog->created_at->locale('vi')->isoFormat('D MMMM, YYYY') }}
                                    </div>

                                    <a href="{{ route('blog.detail', $blog->blog_slug) }}" class="apple-blog-title">
                                        {{ $blog->blog_title }}
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center mt-5">
                    {{-- Nếu bạn dùng pagination của Laravel, bạn có thể custom giao diện nó sau --}}
                    {{-- {{ $blogs->links('pagination::bootstrap-5') }} --}}
                </div>

            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- JS riêng cho trang blog --}}
@endpush
