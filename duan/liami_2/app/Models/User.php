<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, Authenticatable;

    protected $table = 'users';
    protected $primaryKey = 'UserID';
    protected $fillable = ['Username', 'Password', 'Role', 'Email', 'Phone','Avartar'];

    public function personalProfile()
    {
        return $this->hasOne(PersonalProfile::class, 'UserID', 'UserID');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'CreatedBy', 'UserID');
    }

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class, 'AuthorID', 'UserID');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'CreatedBy', 'UserID');
    }

    public function getAuthIdentifierName()
    {
        return 'UserID';
    }

    public function getAuthPassword()
    {
        return $this->Password; // Đảm bảo mật khẩu được trả về đúng cách
    }
}
