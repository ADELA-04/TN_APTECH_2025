<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $primaryKey = 'BlogID';

    protected $fillable = [
        'Title',
        'Content',
        'IsVisible',
        'View',
        'CategoryID',
        'CreatedBy',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'CreatedBy', 'UserID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'BlogID');
    }

}
