@extends('layouts.default')

@push('css')
    <style>
        .faq-accordion .accordion-item {
            border: none;
            border-bottom: 1px solid #eaeaea;
            border-radius: 0;
            background-color: transparent;
            margin-bottom: 10px;
        }
        .faq-accordion .accordion-button {
            background-color: #f8f9fa;
            border-radius: 12px !important;
            padding: 20px 24px;
            font-size: 1.15rem;
            font-weight: 600;
            color: #1d1d1f;
            box-shadow: none !important;
            transition: all 0.3s ease;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: #0071e3;
            color: #fff;
        }
        .faq-accordion .accordion-button::after {
            filter: brightness(0); /* Đổi màu icon mũi tên */
            transition: transform 0.3s ease;
        }
        .faq-accordion .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1); /* Mũi tên màu trắng khi mở */
        }
        .faq-accordion .accordion-body {
            padding: 24px;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #495057;
            background-color: #fff;
            border-radius: 0 0 12px 12px;
        }
        .defense-box {
            background: rgba(0, 113, 227, 0.05);
            border-left: 4px solid #0071e3;
            padding: 15px 20px;
            border-radius: 0 8px 8px 0;
            margin-bottom: 1.5rem;
        }
    </style>
@endpush

@section('content')
    <section class="page-header-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto text-center">
                    <h2 class="mb-3">@lang('faq.header.title')</h2>
                    <p class="text-muted">@lang('faq.header.subtitle')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    
                    {{-- Hộp thông báo / Lời ngỏ (Rất tốt cho Defense Content) --}}
                    <div class="defense-box">
                        <i class="bi bi-info-circle-fill text-primary me-2"></i>
                        @lang('faq.defense_notice')
                    </div>

                    {{-- Vòng lặp Accordion tạo FAQ --}}
                    <div class="accordion faq-accordion mt-5" id="accordionFAQ">
                        @foreach (__('faq.questions') as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $key }}">
                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapse{{ $key }}" 
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                                            aria-controls="collapse{{ $key }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $key }}" 
                                     class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" 
                                     aria-labelledby="heading{{ $key }}" 
                                     data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        {!! $faq['answer'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection