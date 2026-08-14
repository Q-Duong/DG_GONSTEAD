<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_type',
        'name_vi',
        'condition_vi',
        'content_vi',
        'name_en',
        'condition_en',
        'content_en',
        'is_active',
    ];

    /**
     * Scope chỉ lấy những đánh giá đang được Active
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /* =========================================================
       ACCESSORS: TỰ ĐỘNG CHUYỂN ĐỔI NGÔN NGỮ KHI GỌI NGOÀI VIEW
       Thay vì gọi $review->name_vi, ta chỉ cần gọi $review->name
    ========================================================= */

    public function getNameAttribute()
    {
        $locale = App::getLocale(); // Lấy ngôn ngữ hiện tại ('vi' hoặc 'en')
        // Ưu tiên ngôn ngữ hiện tại. Nếu trống, lấy tiếng Việt làm mặc định.
        return $this->{'name_' . $locale} ?: $this->name_vi;
    }

    public function getConditionAttribute()
    {
        $locale = App::getLocale();
        return $this->{'condition_' . $locale} ?: $this->condition_vi;
    }

    public function getContentAttribute()
    {
        $locale = App::getLocale();
        return $this->{'content_' . $locale} ?: $this->content_vi;
    }
}