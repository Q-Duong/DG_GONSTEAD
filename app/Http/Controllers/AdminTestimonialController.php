<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTestimonialController extends Controller
{
    // public function index()
    // {
    //     $testimonials = Testimonial::active()->latest()->get();
    //     return view('pages.client.testimonials.index', compact('testimonials'));
    // }

    // 1. Danh sách Testimonials
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('pages.admin.testimonials.index', compact('testimonials'));
    }

    // 2. Giao diện thêm mới
    public function create()
    {
        $testimonial = new Testimonial();
        return view('pages.admin.testimonials.form', compact('testimonial'));
    }

    // 3. Xử lý lưu thêm mới
    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('review', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
                         ->with('success', __('admin_testimonials.messages.created'));
    }

    // 4. Giao diện cập nhật
    public function edit(Testimonial $testimonial)
    {
        return view('pages.admin.testimonials.form', compact('testimonial'));
    }

    // 5. Xử lý lưu cập nhật
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            $data['image'] = $request->file('image')->store('review', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
                         ->with('success', __('admin_testimonials.messages.updated'));
    }

    // 6. Xử lý xóa
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }
        
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
                         ->with('success', __('admin_testimonials.messages.deleted'));
    }

    // Hàm dùng chung để validate dữ liệu
    private function validateData(Request $request)
    {
        $validated = $request->validate([
            'name_vi' => 'required|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'condition_vi' => 'nullable|string|max:255',
            'condition_en' => 'nullable|string|max:255',
            'content_vi' => 'nullable|string|max:1000',
            'content_en' => 'nullable|string|max:1000',
            'image_type' => 'required|in:photo,screenshot', // Đã đổi avatar thành photo
            'is_active' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Ép kiểu: Nếu người dùng để trống, chuyển giá trị null thành chuỗi rỗng ('')
        // Việc này giúp MySQL không bị báo lỗi "Column cannot be null"
        $validated['name_en'] = $validated['name_en'] ?? '';
        $validated['condition_vi'] = $validated['condition_vi'] ?? '';
        $validated['condition_en'] = $validated['condition_en'] ?? '';
        $validated['content_en'] = $validated['content_en'] ?? '';

        // Xử lý giá trị checkbox an toàn
        $validated['is_active'] = $request->has('is_active') ? $request->is_active : 1;

        return $validated;
    }
}