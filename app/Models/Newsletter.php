<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'newsletters';

    protected $fillable = ['name', 'email'];
}
