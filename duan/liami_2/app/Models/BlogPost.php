<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';
    protected $primaryKey = 'PostID';
    protected $fillable = [
        'Title',
        'Content',
        'Summary',
        'ImageURL',
        'IsVisible',
        'AuthorID',
        'views',
    ];
}
