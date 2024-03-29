<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
    public $timestamps = false;

    protected $fillable = ['email', 'token', 'created_at'];

    protected $table = 'password_resets';
}
