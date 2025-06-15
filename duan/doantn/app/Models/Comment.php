<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $primaryKey = 'CommentID';

    protected $fillable = [
        'BlogID',
        'UserID',
        'Content',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'BlogID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
