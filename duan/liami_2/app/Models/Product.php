<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'products';

    // Specify the primary key for the model
    protected $primaryKey = 'ProductID';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'ProductName',
        'Description',
        'Price',
        'SalePrice',
        'Size',
        'Color',
        'Image',
        'Weigh',
        'Brand',
        'View',
        'CategoryID',
        'IsVisible',
        'CreatedBy'
    ];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }
    public function attributeMappings()
    {
        return $this->hasMany(ProductAttributeMapping::class, 'ProductID','ProductID' );
    }

    // Define the relationship with the User model
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'CreatedBy', 'UserID');
    }

    // Optional: Add a scope for visible products
    public function scopeVisible($query)
    {
        return $query->where('IsVisible', true);
    }

    // Optional: Add a method to apply a discount if applicable
    public function getEffectivePriceAttribute()
    {
        return $this->SalePrice ?? $this->Price;
    }
}
