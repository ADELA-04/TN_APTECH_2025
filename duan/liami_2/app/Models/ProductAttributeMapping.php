<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeMapping extends Model
{
    use HasFactory;

    protected $table = 'product_attribute_mapping';

    protected $primaryKey = 'MappingID';

    protected $fillable = [
        'ProductID',
        'ValueID',
    ];

    // Define the relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    }

    // Define the relationship with ProductAttributeValue
    public function value()
    {
        return $this->belongsTo(ProductAttributeValue::class, 'ValueID', 'ValueID');
    }
}
