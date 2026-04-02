@extends('layouts.default')
@push('css')
    {{-- <link rel="stylesheet" href="{{ versionResource('assets/css/main.built.css') }}" type="text/css" as="style" /> --}}
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
                                    class="carousel-image img-fluid" alt="DG Gonstead - Bring your life back">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>DG Gonstead</h1>

                                    <p>Bring your life back</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/client/images/slide/hero_startframe_2.png') }}"
                                    class="carousel-image img-fluid" alt="DG Gonstead - Bring your life back">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>DG Gonstead</h1>

                                    <p>Bring your life back</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/client/images/slide/hero_startframe_3.png') }}"
                                    class="carousel-image img-fluid" alt="DG Gonstead - Bring your life back">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>DG Gonstead</h1>

                                    <p>Bring your life back</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Welcome to Kind Heart Charity</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ asset('assets/client/images/icons/hands.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ asset('assets/client/images/icons/heart.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ asset('assets/client/images/icons/receive.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text">Make a <strong>Donation</strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">
                            <img src="{{ asset('assets/client/images/icons/scholarship.png') }}"
                                class="featured-block-image img-fluid" alt="">

                            <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                    <video controls autoplay playsinline muted loop class="custom-text-box-image img-fluid"
                        alt="Video giới thiệu về DG Gonstead cũng là giới thiệu về ngành Chiropractic">
                        <source src="{{ asset('storage/DG-Gonstead.mp4') }}" type="video/mp4">
                        <source src="{{ asset('storage/DG-Gonstead.mp4') }}" type="video/ogg">
                        <source src="{{ asset('storage/DG-Gonstead.mp4') }}" type="video/webm">
                    </video>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">@lang('master_pages.header.aboutUs')</h2>

                        <h5 class="mb-3">Công ty TNHH DG Gonstead (DG GONSTEAD)</h5>

                        <p class="mb-0">DG Gonstead tập trung vào cung cấp các phương pháp điều trị không phẫu thuật,
                            không dùng thuốc, không xâm lấn, nắn chỉnh cột sống, phục hồi chức năng để điều trị các vấn đề
                            về cơ xương khớp.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">@lang('master_pages.define.ourMission')</h5>

                                <p>DG Gonstead ứng dụng kỹ thuật nắn chỉnh cột sống theo nguyên lý Gonstead, kết hợp phục
                                    hồi chức năng và chẩn đoán hình ảnh chính xác giúp mỗi cá nhân tái thiết lập trạng thái
                                    cân bằng cơ – xương – thần kinh, từ đó khơi dậy nguồn năng lượng sống tiềm ẩn.</p>

                                <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Không xâm lấn
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Không phẫu thuật
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Không dùng thuốc
                                    </li>

                                    <li class="custom-list-item d-flex">
                                        <i class="bi-check custom-text-box-icon me-2"></i>
                                        Trả cơ thể về trạng thái cân bằng tự nhiên
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

                                    <span class="counter-text">Thành lập</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="30" data-speed="1000"></span>
                                        <span class="counter-number-text">+</span>
                                    </div>

                                    <span class="counter-text">Nhân viên</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="10000"
                                            data-speed="1000"></span>
                                        <span class="counter-number-text">+</span>
                                    </div>

                                    <span class="counter-text">Bệnh nhân</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-padding section-bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-6 col-12 order-2 order-md-2 order-lg-1 ms-auto mb-4 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Triết lý từ sự gắn kết tự nhiên, sự cộng hưởng hài hòa và sự kết hợp hoàn hảo</h2>
                        <div class="contact-info">
                            <p class="d-flex mb-2">
                                “Cơ thể con người được ví như một cỗ máy vi diệu và cột sống không chỉ có chức năng nâng đỡ,
                                mà còn là “chiếc áo giáp” bảo vệ hệ thần kinh trung ương – kết nối điều phối mọi hoạt động
                                của cỗ máy đó. Nếu sự kết nối giữa não bộ và các bộ phận cơ thể bị ảnh hưởng, cỗ máy sẽ
                                không thể làm việc hiệu quả và chỉ khi cột sống được điều chỉnh chính xác một cách chuẩn mực
                                tự nhiên cơ thể bạn sẽ ăn uống ngon hơn, vận động tốt hơn, suy nghĩ tích cực hơn và chất
                                lượng cuộc sống cũng từ đó sẽ tăng lên rất nhiều.”
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 order-1 order-md-1 order-lg-2 mb-4">
                    <img src="{{ asset('assets/client/images/home-pages/the-synergy.webp') }}"
                        class="custom-text-box-image img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5 col-12">
                    <img src="{{ asset('assets/client/images/home-pages/the-blielf.jpg') }}"
                        class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>NIỀM TIN CỦA PHƯƠNG PHÁP GONSTEAD</h2>

                        <div class="contact-info">
                            <p class="d-flex mb-3">
                                1 Cơ thể bạn được tạo ra để sống hài hòa với tự nhiên.</p>
                            <p class="d-flex mb-3">
                                2 Hệ thần kinh kiểm soát, phối hợp và điều hòa mọi chức năng trong cơ thể.
                            </p>
                            <p class="d-flex mb-3">
                                3 Khi hệ thần kinh bị cản trở, bạn sẽ không thể phát huy hết tiềm năng di truyền vốn có của
                                mình.
                            </p>
                            <p class="d-flex mb-3">
                                4 Cột sống được thiết kế để nâng đỡ cơ thể và đồng thời bảo vệ hệ thần kinh trung ương.
                            </p>
                            <p class="d-flex mb-3">
                                5 Những sai lệch trong cột sống và cơ thể có thể dẫn đến rối loạn chức năng của hệ thần
                                kinh.
                            </p>
                            <p class="d-flex mb-3">
                                6 Các sai lệch này có thể làm tăng sự hao mòn ở cột sống và cơ thể, từ đó gây ra các triệu
                                chứng nguy hại.
                            </p>
                            <p class="d-flex mb-3">
                                7 Nếu không được chữa trị điều chỉnh, những sai lệch này có thể dẫn đến những tình trạng
                                nghiêm trọng hơn cho cơ thể bạn trong tương lai.
                            </p>
                            <p class="d-flex mb-3">
                                8 Hãy kiểm tra cột sống và cơ thể của bạn để phát hiện và điều chỉnh các sai lệch để nâng
                                cao chất lượng cơ thể cũng như cuộc sống của bạn.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg" id="section_3">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-4 col-12 me-auto">
                    <h2 class="mb-0">@lang('master_pages.header.service')</h2>
                    <p class="text-muted">DG Gonstead tập trung vào phương pháp điều trị “không phẫu thuật, không dùng
                        thuốc, không xâm lấn”, ứng dụng kỹ thuật nắn chỉnh cột sống theo nguyên lý Gonstead, kết hợp phục
                        hồi chức năng và chẩn đoán hình ảnh chính xác giúp mỗi cá nhân tái thiết lập trạng thái cân bằng cơ
                        – xương – thần kinh, điều trị nhiều căn bệnh liên quan đến cột sống hệ thần kinh với những triệu
                        chứng sau:</p>
                </div>

                <div class="col-lg-6 col-12">
                    <ul class="custom-list mt-2">
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Viêm khớp
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>Gai xương
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>Hội chứng ống cổ tay
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau cổ mãn tính
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Bệnh thoái hóa khớp
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Phình và thoát vị đĩa đệm
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Chóng mặt
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau cơ xơ hóa
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Tư thế đầu đưa ra trước
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau đầu
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau gối
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau lưng dưới
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau lưng giữa
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Chứng đau nửa đầu
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Tê bì và châm chích (tay và chân)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau cổ
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Vẹo cột sống
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau thần kinh tọa
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau vai và cánh tay
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Chấn thương thể thao
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Sai lệch đường cong cổ sinh lý của cột sống
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau và căng thẳng ở cột sống
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Rối loạn khớp thái dương hàm
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Vẹo cổ (nghiêng cổ bất thường)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Cổ bị chấn động mạnh ,đột ngột do tai nạn (thường do tai nạn giao thông)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Chóng mặt và rối loạn thăng bằng
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Trào ngược axit dạ dày
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Dị ứng
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Tự kỷ, Liệt Bell (liệt dây thần kinh mặt)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Bại não
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Bệnh Crohn (viêm ruột mạn tính)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Chức năng miễn dịch
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Hội chứng ruột kích thích
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Rối loạn thần kinh
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau liên quan đến thai kỳ
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Bệnh rễ thần kinh (chèn ép rễ thần kinh)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Chấn thương do căng thẳng lặp đi lặp lại (Repetitive Strain Injury – RSI)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Rối loạn co giật (động kinh)
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-dot"></i>
                            Đau dây thần kinh sinh ba
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/client/images/service/dau-moi-lung.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Đau Mỏi Lưng</h5>
                                <p>Đau mỏi lưng thường gây khó chịu và ảnh hưởng đến sinh hoạt hằng ngày. Với phương pháp
                                    Gonstead, cột sống sẽ được điều chỉnh nhẹ nhàng,chính xác , giúp cơ thể thư giãn, lấy
                                    lại sự cân bằng và giảm đau hiệu quả.</p>
                            </div>
                            <div class="custom-btn btn">DG Gonstead</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/client/images/service/co-vai-gay.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Cổ – Vai – Gáy</h5>

                                <p>Đau nhức vùng cổ, vai, gáy thường đến từ việc sai tư thế, stress hoặc làm việc quá sức.
                                    Phương pháp Gonstead giúp giảm đau nhanh chóng, thư giãn cơ bắp, phục hồi vận động linh
                                    hoạt và cải thiện chất lượng cuộc sống.
                                </p>
                            </div>
                            <div class="custom-btn btn">DG Gonstead</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/client/images/service/thoat-vi-dia-dem.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Thoát Vị Đĩa Đệm</h5>
                                <p>Thoát vị đĩa đệm không chỉ gây đau mà còn làm hạn chế vận động. Tại DG Gonstead, chúng
                                    tôi áp dụng kỹ thuật chỉnh trị an toàn, nhẹ nhàng, giúp giảm áp lực lên dây thần kinh,
                                    hỗ trợ vận động linh hoạt và hạn chế tái phát.</p>
                            </div>
                            <div class="custom-btn btn">DG Gonstead</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/client/images/service/cong-veo-cot-song.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Cong Vẹo Cột Sống, Gù Lưng – Cổ Rùa</h5>
                                <p>Tình trạng gù lưng, vẹo cột sống hay cổ rùa khiến vóc dáng mất cân đối và ảnh hưởng đến
                                    sức khỏe tổng thể. Với phương pháp Gonstead, từng đốt sống được chỉnh trị chính xác,
                                    giúp cải thiện tư thế, dáng đi và duy trì sức khỏe lâu dài.</p>
                            </div>
                            <div class="custom-btn btn">DG Gonstead</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/client/images/service/thoai-hoa.jpg') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Thoái Hóa, Gai Đốt Sống</h5>

                                <p>Thoái hóa hay gai cột sống thường gặp ở người lớn tuổi hoặc người lao động nặng. phương
                                    pháp Gonstead kết hợp với các bài tập hỗ trợ giúp làm dịu cơn đau, tăng cường vận động
                                    và mang lại cuộc sống thoải mái, dễ chịu hơn.
                                </p>
                            </div>
                            <div class="custom-btn btn">DG Gonstead</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('assets/client/images/service/dau-than-kinh-toa.png') }}"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Đau Thần Kinh Tọa, Tê Bì Chân Tay</h5>
                                <p>Tình trạng đau thần kinh tọa hay tê bì chân tay khiến việc đi lại, cử động trở nên khó
                                    khăn. Tại DG Gonstead, chúng tôi thăm khám kỹ lưỡng để tìm đúng nguyên nhân và đưa ra
                                    phác đồ điều chỉnh phù hợp. Với kỹ thuật chỉnh trị chính xác, cơn đau được giảm nhẹ, cảm
                                    giác được phục hồi và hệ thần kinh lưu thông tốt hơn.</p>
                            </div>
                            <div class="custom-btn btn">DG Gonstead</div>
                        </div>
                    </div>
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

            </div>
        </div>
    </section>


    <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="mb-lg-3">Cảm nhận của khách hàng</h2>

                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title">Hôm nay em mới đi khám lần 4 về mặc dù đã khỏi từ lần hai.
                                        ba. lần 4 kiểm tra lại cho chắc và em đã khỏi hẳn 10 điểm không có nhưng cho các bác
                                        và phòng khám họ không những làm việc kiếm tiền mà còn thấu hiểu hiểu từng cơn đau
                                        của bệnh nhân.họ làm từ tâm trong líp và y chan ngoài đời thật rất trân trọng và
                                        biết ơn em cũng đã kết thúc liệu trình đi đứng ngon lành chúc ê kíp phòng khám công
                                        tác thật tốt để cứu chữa được nhiều người bệnh như em.</h6>

                                    <small class="carousel-name"><span class="carousel-name-title">Nhà May Bobo
                                        </span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title">Hành trình này không phải là được “cứu chữa” theo nghĩa phụ
                                        thuộc. Nó giống như kéo mình ra khỏi một quỹ đạo sai để tự mình bước lại cho đúng
                                        cho vững. Và DG Gonstead, trong hành trình này, là một nhân duyên rất đáng biết ơn
                                        và trân trọng.
                                        Tương lai dù chưa rõ thế nào nhưng hiện tại mình đã rất mừng vui khôn xiết, thật
                                        lòng mình xin trân trọng cảm ơn anh Đào Anh Dũng – Chủ tịch, anh Hoàng Trần và tập
                                        thể DG Gonstead đã đưa tay cứu lấy mình thoát khỏi cơn đau cấp tính.</h6>

                                    <small class="carousel-name"><span class="carousel-name-title">Nguyễn Thành Tốt
                                        </span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title">THẬT LÒNG CÁM ƠN ANH VÀ TEAM DG GONSTEAD ĐÀ LẠT ĐÃ TẬN TÌNH
                                        ĐIỀU TRỊ CĂN BỆNH THOÁT VỊ ĐĨA ĐỆM, ĐAU THẦN KINH TOẠ MÀ EM ĐÃ BỊ MẤY TUẦN NAY, LÀM
                                        EM MẤT ĂN, MẤT NGỦ, ĐAU NHỨT CẢ NGÀY, KHÔNG THỂ NGỒI, ĐI ĐỨNG, CHỈ NẰM NHƯ MỘT NGƯỜI
                                        BẠI LIỆT. SAU 1 LẦN ĐIỀU TRỊ CHỖ ANH, EM ĐÃ CÓ THỂ ĐI ĐƯỢC, NGỒI ĐƯỢC, CẢM GIÁC ĐAU
                                        NHỨT CŨNG DẦN PHAI MẤT, HIỆU QUẢ GIẢM ĐẾN 70-80%, HY VỌNG ĐỢT ĐIỀU TRỊ LẦN 2 TIẾP
                                        THEO SẼ CẢI THIỆN THÊM NỮA VÀ SẼ DẦN DẦN HỒI PHỤC HOÀN TOÀN NHƯ MỘT NGƯỜI BÌNH
                                        THƯỜNG. CHÚC CÔNG TY ANH VÀ TEAM LUÔN LUÔN PHÁT TRIỂN VÀ SẼ LÀ ĐƠN VỊ ĐIỀU TRỊ Y HỌC
                                        CỔ TRUYỀN LỚN MẠNH NHẤT.</h6>

                                    <small class="carousel-name"><span class="carousel-name-title">Nguyễn Thanh Sang
                                        </span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title">Hôm nay mình đã đến đây đều trị. Phải nói 1 cái là rất tuyệt
                                        vời hơn những gì mình nghỉ. Trước khi tới đây mình đi đứng rất khó khăn và cong
                                        chân. Vô khám bác sỹ nắn nót mà mình đã đi thẳng chân và lưng 1 cách không thể ngờ.
                                        1 lần nữa cảm ơn các bác sỹ
                                        Nếu ai bị như mình hãy đến đây đều trị nhé. Chị phí hợp với bệnh của mình ạ hiện tại
                                        e đang đều trị ở đây.
                                    </h6>

                                    <small class="carousel-name"><span class="carousel-name-title">Utchi Le</span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title">Trong cuộc sống ai rồi cũng có lúc bệnh tật. Mẹ mh cũng thế.
                                        Một người được mọi người hay gọi với cái tên thân thương gần gửi " Cô hai". Tuy bà
                                        không được qua trường lớp nhưng lại được một cái biệt tài nắn xương khớp cho rất
                                        nhiều người bị.
                                        Nhưng rồi đầu năm nay. Ngay ngày mà mọi người đang chuẩn bị đón Tết thì mẹ lại bị
                                        té.... bác sỹ bảo bị gãy xương sống. Rồi phải chật vật nằm một chỗ hết hơn 2 tháng
                                        trời. Khi ngồi dc thì lại bị chèn dây thần kinh, thoát vị đĩa đệm, tay chân tê cứng,
                                        không đi đứng được. Đi bệnh viện thì lại kêu phải mổ.... Nghe đến đây mh hoang mang
                                        vô cùng. Người ta bảo nếu mổ thì phần trăm đi lại rất thấp. Vậy có phải còn khổ hơn
                                        ko.
                                        Rồi vô tình mh tìm dc một trang tiktok có tên là DG Gonstead thu hút rất nhiều lượt
                                        xem và còn đem lại rất nhiều niềm vui cho mọi người. Mình đã " trốn viện" hi. Thật
                                        sáng suốt.
                                        Một cơ sở trị liệu xương khớp. Nơi mà mẹ e cảm thấy thật vui khi giống cái năng
                                        khiếu mà mẹ đã có dc." Nhưng đến lúc mh bị thì đành chịu bó tay". Mẹ đã đỡ rất
                                        nhiều, đứng lên không còn khó khăn như trước. Bước đi được nhiều hơn. Tự chăm sóc
                                        bản thân, tự nấu món ăn mà mh thích. Cảm ơn a Dao Anh Dung tuy chưa gặp a lần nào
                                        nhưng a rất nhiệt tình và rất tận tâm, nhờ có a a đã đem lại nhiều niềm vui cho mọi
                                        người.
                                        Em cảm ơn vì tất cả.
                                    </h6>

                                    <small class="carousel-name"><span class="carousel-name-title">Mui</span></small>
                                </div>
                            </div>



                        </div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                <img src="{{ asset('assets/client/images/avatar/feedback-1.jpg') }}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                <img src="{{ asset('assets/client/images/avatar/feedback-2.jpg') }}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                <img src="{{ asset('assets/client/images/avatar/feedback-3.jpg') }}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                <img src="{{ asset('assets/client/images/avatar/feedback-4.jpg') }}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="4" class="">
                                <img src="{{ asset('assets/client/images/avatar/feedback-1.jpg') }}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>@lang('master_pages.header.contact')</h2>

                        <div class="contact-info">
                            <h5 class="mt-3">Cơ sở TP. Hồ Chí Minh</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                <a target="_blank" href="https://maps.app.goo.gl/KSAsd8MyUS1EsBnJ8">@lang('master_pages.footer.address')
                                    @lang('master_pages.footer.addHCM')
                                </a>
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi bi-phone me-2"></i>
                                <a href="tel:1900 633 287">
                                    @lang('master_pages.footer.phone') 1900 633 287
                                </a>
                                <a href="tel:0972767973">&nbsp;-&nbsp;0972767973
                                </a>
                                <a href="tel:0777821112">&nbsp;-&nbsp;0777821112
                                </a>
                            </p>

                            <h5 class="mt-5">Cơ sở TP. Đà Lạt</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                <a target="_blank" href="https://maps.app.goo.gl/rW3snWe7fsFUzm2D6">@lang('master_pages.footer.address')
                                    @lang('master_pages.footer.addDL')
                                </a>
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi bi-phone me-2"></i>
                                <a href="tel:0943913311">
                                    @lang('master_pages.footer.phone') 0943 91 33 11
                                </a>
                                <a href="tel:0937813311">&nbsp;-&nbsp;0937 81 33 11
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mx-auto custom-form contact-form">
                    <h5>Cơ sở TP. Hồ Chí Minh</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.406329420679!2d106.7556882!3d10.780158799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752500640e2cbf%3A0xda2338d491d15f40!2zQ8ahIHPhu58ga-G7uSB0aHXhuq10IFBIQ04gREcgR29uc3RlYWQ!5e0!3m2!1svi!2s!4v1757240983574!5m2!1svi!2s"
                        width="100%" height="160px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5 class="mt-3">Cơ sở TP. Đà Lạt</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.5957044188126!2d108.44013267530345!3d11.933199488294807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317113658119e305%3A0xaf3b20db863a964f!2zREcgR29uc3RlYWQgxJDDoCBM4bqhdA!5e0!3m2!1svi!2s!4v1775116930011!5m2!1svi!2s"
                        width="100%" height="160px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    {{-- <script src="{{ versionResource('frontend/js/home.min.js') }}" defer></script> --}}
@endpush
