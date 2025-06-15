<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'UserID';

    protected $fillable = [
        'Username',
        'Email',
        'Password',
        'Role',
        'Avatar',
    ];
    public function personalProfile()
    {
        return $this->hasOne(PersonalProfile::class, 'UserID', 'UserID');
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'CreatedBy');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'UserID');
    }
    public function getAuthIdentifierName()
    {
        return 'UserID';
    }
}
