<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $table = 'shipping_addresses';
    protected $primaryKey = 'AddressID';
    protected $fillable = [
        'CustomerID',
        'Phone',
        'Country',
        'City',
        'District',
        'Comune',
        'AddressDetail',
        'Email',
        'IsPickupAddress',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }
}
