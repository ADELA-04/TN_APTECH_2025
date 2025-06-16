<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    protected $fillable = [
        'Email',
        'FullName',
        'PasswordHash',
        'Gender',
        'ProfilePicture',

    ];


      public function getAuthPassword() {
        return $this->PasswordHash;
    }
     public function orders()
    {
        return $this->hasMany(Order::class, 'CustomerID');
    }
}
