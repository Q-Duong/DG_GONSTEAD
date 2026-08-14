@extends('layouts.default')

@section('title', __('testimonials.seo.title'))
@section('seo_description', __('testimonials.seo.description'))

@push('css')
    <style>
        /* Bố cục Masonry (Lưới xếp gạch) */
        .apple-masonry-grid {
            column-count: 3;
            column-gap: 24px;
        }

        @media (max-width: 991px) {
            .apple-masonry-grid {
                column-count: 2;
            }
        }

        @media (max-width: 767px) {
            .apple-masonry-grid {
                column-count: 1;
            }
        }

        /* Thẻ Card chung */
        .apple-review-card {
            background-color: #f5f5f7;
            border-radius: 24px;
            overflow: hidden;
            margin-bottom: 24px;
            break-inside: avoid;
            transition: all 0.3s ease;
            position: relative;
        }

        .apple-review-card:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
            transform: translateY(-5px);
        }

        /* -------------------------------------
               XỬ LÝ 2 LOẠI HÌNH ẢNH KHÁC NHAU
            ------------------------------------- */
        .review-image-wrapper {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        /* 1. Loại Ảnh chụp (Photo) */
        .review-image-wrapper.type-photo {
            max-height: 250px;
            /* Khống chế chiều cao */
        }

        .review-image.photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Lấp đầy khung, không méo */
        }

        /* 2. Loại Ảnh tin nhắn (Screenshot) */
        .review-image-wrapper.type-screenshot {
            background-color: #ffffff;
            /* Nền trắng cho tin nhắn */
            border-bottom: 1px solid #e5e5ea;
        }

        .review-image.screenshot {
            width: 100%;
            height: auto;
            /* Thả tự do chiều cao để đọc hết chữ */
            display: block;
            object-fit: contain;
        }

        /* Nhãn báo "Tin nhắn" xịn xò cho ảnh chụp màn hình */
        .screenshot-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-size: 0.8rem;
            padding: 6px 14px;
            border-radius: 980px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            /* Hiệu ứng kính mờ của Apple */
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Phần nội dung Text (giữ nguyên) */
        .review-content-box {
            padding: 30px;
        }

        .quote-icon {
            color: #0071e3;
            font-size: 2rem;
            opacity: 0.2;
            margin-bottom: 10px;
            line-height: 1;
        }

        .review-text {
            font-size: 1.05rem;
            color: #1d1d1f;
            line-height: 1.6;
            margin-bottom: 20px;
            font-style: italic;
        }

        .customer-info {
            display: flex;
            align-items: center;
            gap: 15px;
            border-top: 1px solid #e5e5ea;
            padding-top: 20px;
        }

        .customer-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #0071e3;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .customer-details h4 {
            font-size: 1.05rem;
            font-weight: 700;
            margin: 0 0 3px 0;
            color: #1d1d1f;
        }

        .customer-details span {
            font-size: 0.85rem;
            color: #86868b;
            display: block;
        }

        .rating-stars {
            color: #ffb300;
            font-size: 0.9rem;
            margin-top: 3px;
        }
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto text-center">
                    <h2 class="mb-3 fw-bold">@lang('testimonials.header.title')</h2>
                    <p class="text-muted" style="font-size: 1.15rem;">@lang('testimonials.header.subtitle')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="apple-masonry-grid">

                @foreach ($testimonials as $review)
                    <div class="apple-review-card">

                        @if ($review->image)
                            <div class="review-image-wrapper type-{{ $review->image_type }}">
                                <img src="{{ asset('storage/' . $review->image) }}" alt="{{ $review->name }}"
                                    class="review-image {{ $review->image_type }}">

                                @if ($review->image_type == 'screenshot')
                                    <div class="screenshot-badge">
                                        <i class="bi bi-chat-dots-fill"></i> @lang('testimonials.labels.message')
                                    </div>
                                @endif
                            </div>
                        @endif

                        <div class="review-content-box">
                            <div class="quote-icon"><i class="bi bi-quote"></i></div>

                            @if ($review->content)
                                <div class="review-text">"{{ $review->content }}"</div>
                            @endif

                            <div class="customer-info">
                                <div class="customer-avatar">{{ mb_substr($review->name, 0, 1) }}</div>
                                <div class="customer-details">
                                    <h4>{{ $review->name }}</h4>
                                    <span>{{ $review->condition }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
