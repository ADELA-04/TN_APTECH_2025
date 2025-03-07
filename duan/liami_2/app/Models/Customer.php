<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    protected $fillable = [
        'Username',
        'FullName',
        'Email',
        'PasswordHash',
        'Gender',
        'ProfilePicture',
    ];

    public function shippingAddress()
    {
        return $this->hasMany(ShippingAddress::class, 'CustomerID', 'CustomerID');
    }
}
