<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function locale($locale)
    {
        // Kiểm tra locale hợp lệ
        if (!in_array($locale, ['en', 'vn'])) {
            abort(400);
        }

        // Lưu vào session (để dành cho các logic khác nếu cần)
        session()->put('locale', $locale);

        // 1. Lấy URL đầy đủ của trang mà người dùng vừa đứng
        $previousUrl = url()->previous();

        // 2. Tách lấy phần Path (đường dẫn) và phần Query (các tham số phía sau dấu ?)
        $path = parse_url($previousUrl, PHP_URL_PATH);
        $query = parse_url($previousUrl, PHP_URL_QUERY);
        
        // Cắt bỏ dấu '/' ở đầu path để dễ xử lý (vd: '/en/about' thành 'en/about')
        $path = ltrim($path, '/');

        // 3. Gỡ bỏ prefix 'en' khỏi URL hiện tại (nếu đang ở trang tiếng Anh)
        if (preg_match('/^en(\/|$)/', $path)) {
            $path = preg_replace('/^en(\/|$)/', '', $path);
        }

        // 4. Gắn lại prefix mới dựa trên ngôn ngữ người dùng vừa chọn
        if ($locale === 'en') {
            $newPath = 'en/' . $path;
        } else {
            // Tiếng Việt mặc định không có prefix
            $newPath = $path;
        }

        // 5. Nối lại Query string (nếu có)
        $queryString = $query ? '?' . $query : '';
        $newUrl = url($newPath) . $queryString;

        // 6. Chuyển hướng sang URL đã được build lại hoàn chỉnh
        return redirect($newUrl);
    }
}