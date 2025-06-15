<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $primaryKey = 'CartID';
    protected $fillable = [
        'CustomerID',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'CartID');
    }
}
