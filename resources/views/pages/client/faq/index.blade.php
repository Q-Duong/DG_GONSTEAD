@extends('layouts.default')
@section('title', __('faq.seo.title'))
@section('seo_description', __('faq.seo.description'))
@push('css')
    <style>
        /* Các CSS Accordion giữ nguyên như bản trước */
        .faq-accordion .accordion-item { border: none; border-bottom: 1px solid #eaeaea; background-color: transparent; margin-bottom: 10px; }
        .faq-accordion .accordion-button { background-color: #f8f9fa; border-radius: 12px !important; padding: 20px 24px; font-size: 1.15rem; font-weight: 600; color: #1d1d1f; box-shadow: none !important; transition: all 0.3s ease; }
        .faq-accordion .accordion-button:not(.collapsed) { background-color: #0071e3; color: #fff; }
        .faq-accordion .accordion-button::after { filter: brightness(0); transition: transform 0.3s ease; }
        .faq-accordion .accordion-button:not(.collapsed)::after { filter: brightness(0) invert(1); }
        .faq-accordion .accordion-body { padding: 24px; font-size: 1.05rem; line-height: 1.8; color: #495057; background-color: #fff; border-radius: 0 0 12px 12px; }
        .defense-box { background: rgba(0, 113, 227, 0.05); border-left: 4px solid #0071e3; padding: 15px 20px; border-radius: 0 8px 8px 0; margin-bottom: 1.5rem; }
        .btn-read-more { display: inline-flex; align-items: center; gap: 8px; font-weight: 600; color: #0071e3; text-decoration: none; margin-top: 15px; }
        .btn-read-more:hover { text-decoration: underline; color: #005bb5; }
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
                    
                    <div class="defense-box">
                        <i class="bi bi-info-circle-fill text-primary me-2"></i>
                        @lang('faq.defense_notice')
                    </div>

                    <div class="accordion faq-accordion mt-5" id="accordionFAQ">
                        @foreach (__('faq.questions') as $slug => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $slug }}">
                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapse-{{ $slug }}" 
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                                            aria-controls="collapse-{{ $slug }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $slug }}" 
                                     class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" 
                                     aria-labelledby="heading-{{ $slug }}" 
                                     data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        {{-- In ra câu trả lời ngắn --}}
                                        {!! $faq['short_answer'] !!}
                                        
                                        {{-- Nút trỏ về trang chi tiết chuẩn SEO --}}
                                        <div class="mt-3">
                                            <a href="{{ route('faq.show', $slug) }}" class="btn-read-more">
                                                @lang('faq.meta.read_more') <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
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

@push('js')
    {{-- Tự động sinh JSON-LD Schema FAQPage đẩy cho Googlebot --}}
    @php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => []
        ];
        foreach(__('faq.questions') as $slug => $faq) {
            $schema['mainEntity'][] = [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => strip_tags($faq['short_answer']) // Loại bỏ thẻ HTML thừa cho an toàn
                ]
            ];
        }
    @endphp
    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endpush