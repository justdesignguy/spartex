<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const TYPES = [
        'range_product' => 'Range Of Fabrics',
        'type_product' => 'Type Of Fabrics',
    ];

    protected $primaryKey = 'id';

    protected $table = 'products';

    protected $fillable = ['category_id', 'title', 'slug', 'type', 'short_description', 'description', 'image', 'small_image'];

    public function categoryDetail(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
