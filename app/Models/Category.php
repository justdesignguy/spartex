<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const LAYOUT_TYPES = [
        'fabric' => 'Fabric Layout',
        'garment' => 'Garment Layout',
    ];

    protected $primaryKey = 'id';

    protected $table = 'categories';

    protected $fillable = ['title', 'slug', 'layout_type', 'image'];
}
