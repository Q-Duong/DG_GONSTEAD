<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;

class ContactController extends Controller
{

public function submitAppointment(Request $request)
{
    // 1. Xác thực dữ liệu đầu vào
    $validatedData = $request->validate([
        'name'    => 'required|string|max:255',
        'phone'   => 'required|string|max:20|regex:/^[0-9\-\+]{9,15}$/',
        'date'    => 'required|date|after_or_equal:today', 
        'branch'  => 'required|string|max:255',
        'message' => 'nullable|string|max:1000',
    ], [
        'name.required'     => 'Vui lòng nhập họ và tên của bạn.',
        'phone.required'    => 'Vui lòng nhập số điện thoại để liên hệ.',
        'phone.regex'       => 'Số điện thoại không đúng định dạng.',
        'date.required'     => 'Vui lòng chọn ngày khám.',
        'date.after_or_equal'=> 'Không được chọn ngày trong quá khứ.',
        'branch.required'   => 'Vui lòng chọn chi nhánh.',
    ]);

    try {
        $adminEmail = 'Cskh@dggonstead.vn'; 
        Mail::to($adminEmail)->cc('tuyentran162@gmail.com')->send(new AppointmentMail($validatedData));

        // Trả về JSON nếu gọi bằng AJAX
        if ($request->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Đăng ký đặt lịch thành công! Chuyên viên của DG Gonstead sẽ sớm liên hệ với bạn.'
            ], 200);
        }

        return back()->with('success', 'Đăng ký đặt lịch thành công!');

    } catch (\Exception $e) {
        if ($request->wantsJson()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Có lỗi xảy ra trong quá trình gửi. Vui lòng thử lại sau!'
            ], 500);
        }
        return back()->withInput()->withErrors(['error' => 'Có lỗi xảy ra!']);
    }
}
}