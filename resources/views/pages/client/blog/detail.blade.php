@extends('layouts.default')

@section('title', $blog->blog_title . ' | DG Gonstead')
@section('seo_description', Str::limit(strip_tags($blog->blog_content), 150))
{{-- Nếu trong Database có lưu đường dẫn ảnh, bạn mở comment dòng dưới và gắn biến vào --}}
{{-- @section('seo_image', asset('storage/' . $blog->blog_image)) --}}

@push('css')
    <style>
        .blog-reading-container {
            max-width: 840px;
            margin: 0 auto;
        }
        .blog-title {
            font-size: 2.4rem;
            font-weight: 700;
            color: #1d1d1f;
            line-height: 1.35;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }
        .blog-meta {
            display: flex;
            align-items: center;
            gap: 24px;
            color: #86868b;
            font-size: 0.95rem;
            margin-bottom: 35px;
            padding-bottom: 25px;
            border-bottom: 1px solid #e5e5ea;
        }
        
        .blog-hero-image {
            width: 100%;
            max-height: 500px;
            /* Khống chế chiều cao ảnh để không chiếm hết màn hình */
            object-fit: cover;
            border-radius: 24px;
            /* Bo góc lớn đúng chuẩn Apple */
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }
        .blog-content {
            font-size: 1.15rem;
            line-height: 1.85;
            color: #1d1d1f;
        }

        .blog-content h2,
        .blog-content h3 {
            font-weight: 600;
            color: #1d1d1f;
            margin-top: 2.5rem;
            margin-bottom: 1.2rem;
            line-height: 1.4;
        }

        .blog-content p {
            margin-bottom: 1.5rem;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin: 25px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .blog-content blockquote {
            border-left: 4px solid #0071e3;
            padding-left: 20px;
            font-style: italic;
            color: #495057;
            background: #f5f5f7;
            padding: 20px;
            border-radius: 0 16px 16px 0;
            margin: 30px 0;
        }
        .social-share-box {
            background-color: #f5f5f7;
            padding: 24px 32px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 60px;
        }
        .btn-back-to-news {
            color: #0071e3;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            margin-bottom: 30px;
            transition: opacity 0.2s;
        }
        .btn-back-to-news:hover {
            opacity: 0.7;
        }
        .social-icon-btn {
            color: #86868b;
            font-size: 1.3rem;
            transition: color 0.2s;
        }

        .social-icon-btn:hover {
            color: #0071e3;
        }
    </style>
@endpush

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="blog-reading-container">

                <a href="{{ route('blog.index') }}" class="btn-back-to-news">
                    <i class="bi bi-arrow-left"></i>
                    {{ App::getLocale() == 'en' ? 'Back to News' : 'Quay lại Tin tức' }}
                </a>

                <h1 class="blog-title">{{ $blog->blog_title }}</h1>

                <div class="blog-meta">
                    <div>
                        <i class="bi bi-calendar-event me-2"></i>
                        {{ App::getLocale() == 'en' ? $blog->created_at->locale('en')->isoFormat('MMMM D, YYYY') : $blog->created_at->locale('vi')->isoFormat('D MMMM, YYYY') }}
                    </div>
                    <div>
                        <i class="bi bi-person me-2"></i>
                        DG Gonstead
                    </div>
                </div>

                <img src="{{ asset('assets/client/images/news/medium-shot-1.jpg') }}" alt="{{ $blog->blog_title }}"
                    class="blog-hero-image">

                <div class="blog-content">
                    {!! $blog->blog_content !!}
                </div>

                <div class="social-share-box">
                    <span class="fw-bold" style="color: #1d1d1f;">
                        {{ App::getLocale() == 'en' ? 'Share this article:' : 'Chia sẻ bài viết này:' }}
                    </span>
                    <div class="d-flex gap-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                            target="_blank" class="social-icon-btn"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank"
                            class="social-icon-btn"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}"
                            target="_blank" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('js')
    @php
        $articleSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $blog->blog_title,
            'datePublished' => $blog->created_at->toIso8601String(),
            'dateModified' => $blog->updated_at->toIso8601String(),
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'DG Gonstead',
            ],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($articleSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endpush
