<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';
    protected $fillable = ['CategoryName', 'IsVisible','parent_id'];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Định nghĩa mối quan hệ với danh mục con
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


}
