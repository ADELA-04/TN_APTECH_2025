<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    use HasFactory;

    // Nếu bạn muốn sử dụng timestamps, hãy để thuộc tính này
    public $timestamps = false; // Nếu không sử dụng timestamps

    // Đặt tên bảng nếu tên bảng không phải là số nhiều của tên model
    protected $table = 'page_visits';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'visited_at',
        'count',
    ];
}
