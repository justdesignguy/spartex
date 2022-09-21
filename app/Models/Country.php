<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'countries';

    protected $fillable = ['isd_code', 'name', 'length', 'country_code'];
}
