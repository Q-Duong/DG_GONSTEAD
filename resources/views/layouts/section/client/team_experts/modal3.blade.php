<div class="modal fade" id="modalDoctor3" tabindex="-1" aria-labelledby="modalDoctor1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content custom-modal-content">

            <div class="modal-header border-0 position-absolute w-100" style="z-index: 10;">
                <button type="button" class="btn-close btn-close-custom ms-auto" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>

            <div class="modal-body p-4 p-md-5">
                <div class="row align-items-start">
                    
                    <div class="col-md-5 mb-4 mb-md-0 sticky-avatar">
                        <img src="{{ asset('assets/client/images/team/doctor-1.jpg') }}" 
                            class="img-fluid" 
                            style="border-radius: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.08); width: 100%; object-fit: cover;" 
                            alt="Bs. Nguyễn Văn A">
                            
                        <div class="mt-4 text-center d-none d-md-block">
                            <a href="{{ route('contact.index') }}" class="apple-btn-primary w-100 d-inline-block text-decoration-none">
                                Đặt lịch khám ngay
                            </a>
                        </div>
                    </div>

                    <div class="col-md-7 modal-scrollable-content mt-4 mt-md-0">
                        <h6 class="text-primary text-uppercase mb-1" style="font-weight: 600; letter-spacing: 1px;">Chuyên khoa Vật lý trị liệu</h6>
                        <h3 class="mb-4 fw-bold" id="modalDoctor1Label">Bs. Nguyễn Văn A</h3>
                        
                        <ul class="custom-list mb-4">
                            <li class="custom-list-item d-flex mb-3">
                                <i class="bi-check-circle-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <strong class="d-block text-dark">Bằng cấp:</strong>
                                    <span class="text-muted">Tốt nghiệp loại Giỏi Đại học Y Dược TP.HCM.</span>
                                </div>
                            </li>
                            <li class="custom-list-item d-flex mb-3">
                                <i class="bi-check-circle-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <strong class="d-block text-dark">Chứng chỉ:</strong>
                                    <span class="text-muted">CCHN số 12345/HCM-CCHN.</span>
                                </div>
                            </li>
                            <li class="custom-list-item d-flex mb-3">
                                <i class="bi-check-circle-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <strong class="d-block text-dark">Kinh nghiệm:</strong>
                                    <span class="text-muted">Hơn 8 năm làm việc tại khoa Phục hồi chức năng tuyến đầu.</span>
                                </div>
                            </li>
                            <li class="custom-list-item d-flex mb-3">
                                <i class="bi-check-circle-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <strong class="d-block text-dark">Thế mạnh:</strong>
                                    <span class="text-muted">Phục hồi chức năng sau chấn thương thể thao, nắn chỉnh sai lệch tư thế.</span>
                                </div>
                            </li>
                        </ul>
                        
                        <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">
                            Bác sĩ Nguyễn Văn A nổi tiếng với sự tỉ mỉ và tận tâm. Anh luôn đồng hành cùng bệnh nhân trong suốt quá trình tập luyện phục hồi, đảm bảo phác đồ được cá nhân hóa để mang lại hiệu quả nhanh và an toàn nhất.
                        </p>

                        <div class="border-top pt-4 mt-2">
                            <h5 class="fw-bold mb-3">Hình ảnh Chứng chỉ / Bằng cấp</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <img src="{{ asset('assets/client/images/legal/cchn-1.jpg') }}" 
                                        class="img-fluid w-100" 
                                        style="border-radius: 12px; border: 1px solid #eaeaea;" 
                                        alt="Chứng chỉ 1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-3 d-block d-md-none text-center">
                            <a href="{{ route('contact.index') }}" class="apple-btn-primary w-100 d-inline-block text-decoration-none">
                                Đặt lịch khám ngay
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>