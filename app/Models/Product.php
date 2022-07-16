<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IMG_URL = "storage/product/";
    const IMG_PATH = "app/public/product/";

    protected $primaryKey = 'id';

    protected $table = 'products';

    protected $fillable = ['category_id', 'title', 'slug', 'short_description', 'description', 'image'];
}
