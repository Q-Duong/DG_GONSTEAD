@extends('layouts.default_auth')
@section('admin_content')
<div class="container-fluid py-4">
    <div class="mb-4">
        <a href="{{ route('admin.testimonials.index') }}" class="text-decoration-none text-muted">
            <i class="bi bi-arrow-left me-1"></i> @lang('admin_testimonials.form.back')
        </a>
        <h2 class="fw-bold mt-2">
            {{ $testimonial->id ? __('admin_testimonials.form.edit_title') : __('admin_testimonials.form.create_title') }}
        </h2>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="{{ $testimonial->id ? route('admin.testimonials.update', $testimonial->id) : route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($testimonial->id)
                    @method('PUT')
                @endif

                {{-- KHỐI TIẾNG VIỆT --}}
                <h5 class="text-primary mb-3"><i class="bi bi-translate"></i> Tiếng Việt</h5>
                <div class="row bg-light p-3 rounded mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Tên khách hàng (VI) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name_vi') is-invalid @enderror" name="name_vi" value="{{ old('name_vi', $testimonial->name_vi) }}" required>
                        @error('name_vi') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Tình trạng / Bệnh lý (VI)</label>
                        <input type="text" class="form-control @error('condition_vi') is-invalid @enderror" name="condition_vi" value="{{ old('condition_vi', $testimonial->condition_vi) }}">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Nội dung đánh giá (VI) <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content_vi') is-invalid @enderror" name="content_vi" rows="3">{{ old('content_vi', $testimonial->content_vi) }}</textarea>
                    </div>
                </div>

                {{-- KHỐI TIẾNG ANH --}}
                <h5 class="text-success mb-3"><i class="bi bi-globe"></i> Tiếng Anh (English)</h5>
                <div class="row bg-light p-3 rounded mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Tên khách hàng (EN)</label>
                        <input type="text" class="form-control" name="name_en" value="{{ old('name_en', $testimonial->name_en) }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Tình trạng / Bệnh lý (EN)</label>
                        <input type="text" class="form-control" name="condition_en" value="{{ old('condition_en', $testimonial->condition_en) }}">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Nội dung đánh giá (EN)</label>
                        <textarea class="form-control" name="content_en" rows="3">{{ old('content_en', $testimonial->content_en) }}</textarea>
                    </div>
                </div>

                {{-- KHỐI CẤU HÌNH HÌNH ẢNH & TRẠNG THÁI (Giữ nguyên như cũ) --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Hình ảnh đính kèm</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*">
                        @if($testimonial->image)
                            <div class="mt-2"><img src="{{ asset('storage/' . $testimonial->image) }}" class="rounded" style="max-height: 100px;"></div>
                        @endif
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label fw-bold">Loại hình ảnh <span class="text-danger">*</span></label>
                        <select class="form-select" name="image_type" required>
                            <option value="photo" {{ old('image_type', $testimonial->image_type) == 'photo' ? 'selected' : '' }}>Ảnh khách hàng</option>
                            <option value="screenshot" {{ old('image_type', $testimonial->image_type) == 'screenshot' ? 'selected' : '' }}>Ảnh tin nhắn</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label fw-bold">Trạng thái hiển thị</label>
                        <div class="form-check form-switch mt-2">
                            <input type="hidden" name="is_active" value="0">
                            <input class="form-check-input" type="checkbox" name="is_active" value="1" id="isActiveSwitch" {{ old('is_active', $testimonial->is_active ?? 1) ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i> @lang('admin_testimonials.form.save_btn')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection