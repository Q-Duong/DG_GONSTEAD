<!DOCTYPE html>
<html lang="{{ App::getLocale() == 'vn' ? 'vi-VN' : 'en-US' }}" class="enhanced">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'DG Gonstead - Cơ xương khớp - Thoát vị đĩa đệm')</title>
    
    <meta name="description" content="@yield('seo_description', 'DG Gonstead ứng dụng kỹ thuật nắn chỉnh cột sống chuẩn, cơ xương khớp, điều trị thoát vị đĩa đệm, thoái hóa không cần phẫu thuật.')">
    <meta name="keywords" content="@yield('seo_keywords', 'Gonstead, nắn chỉnh cột sống, thoát vị đĩa đệm, DG Gonstead')">
    <meta name="author" content="DG Gonstead">
    
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/dg-gonstead-logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo/dg-gonstead-logo.png') }}" type="image/x-icon">

    <meta property="og:site_name" content="DG Gonstead">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ App::getLocale() == 'vn' ? 'vi-VN' : 'en-US' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'DG Gonstead - Phục hồi cột sống không xâm lấn')">
    <meta property="og:description" content="@yield('seo_description', 'DG Gonstead ứng dụng kỹ thuật nắn chỉnh cột sống, cơ xương khớp, điều trị thoát vị đĩa đệm, thoái hóa không cần phẫu thuật.')">
    <meta property="og:image" content="@yield('seo_image', asset('assets/images/logo/dg-gonstead-logo.png'))">

    <link rel="stylesheet" href="{{ asset('assets/client/styles/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/client/styles/bootstrap-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/client/styles/style.css') }}" type="text/css">
    @stack('css')
</head>

<body id="section_1">
    {{-- <h1 class="visuallyhidden">
        DG Gonstead
    </h1> --}}
    @include('layouts.section.client.header')
    <main class="main" role="main">
        @yield('content')
    </main>
    @include('layouts.section.client.footer')

    <script src="{{ versionResource('assets/client/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ versionResource('assets/client/js/bootstrap.js') }}"></script>

    <script src="{{ versionResource('assets/client/js/sticky.js') }}"></script>
    <script src="{{ versionResource('assets/client/js/counter.js') }}"></script>
    <script src="{{ versionResource('assets/client/js/custom.js') }}"></script>
    {{-- <script src="{{ versionResource('assets/client/js/jquery-ui.min.js') }}" defer></script> --}}
    <script src="https://kit.fontawesome.com/4b68e3663c.js" crossorigin="anonymous" defer></script>
    <script src="{{ versionResource('assets/client/js/main.js') }}"></script>

    @stack('js')

</body>

</html>
