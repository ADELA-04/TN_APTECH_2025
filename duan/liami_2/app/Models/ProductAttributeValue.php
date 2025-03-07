<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    use HasFactory;

    protected $table = 'product_attribute_values';

    protected $primaryKey = 'ValueID';

    protected $fillable = [
        'AttributeID',
        'Value',
    ];

    // Define the relationship with ProductAttribute
    public function attribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'AttributeID', 'AttributeID');
    }

    // Define the relationship with ProductAttributeMapping
    public function mappings()
    {
        return $this->hasMany(ProductAttributeMapping::class, 'ValueID', 'ValueID');
    }
}
