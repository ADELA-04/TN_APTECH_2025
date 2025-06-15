<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'OrderID';
    protected $fillable = [
        'CustomerID',
        'TotalAmount',
        'OrderStatus',
        'PaymentMethod',
        'Notes',
        'Address',
        'Phone',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }


    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'OrderID');
    }
}
