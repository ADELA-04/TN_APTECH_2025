<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $table = 'product_attributes';

    protected $primaryKey = 'AttributeID';

    protected $fillable = [
        'AttributeName',
    ];

    // Define the relationship with ProductAttributeValues
    public function values()
    {
        return $this->hasMany(ProductAttributeValue::class, 'AttributeID', 'AttributeID');
    }
}
