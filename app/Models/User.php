<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const PLAN = ['standard' => "Fashion Standard Membership", 'business' => "Fashion Business Membership"];
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile_number',
        'whatsapp_number',
        'preferred_communication_mode',
        'plan_type',
        'country',
        'company_name',
        'job_title',
        'iec_code',
        'bin_code',
        'type_of_business',
        'how_long_in_business',
        'brand_price_point',
        'which_month_start_sourcing_for_ss',
        'which_month_start_sourcing_for_fw',
        'business_description',
        'company_website',
        'company_instagram_url',
    ];

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function countryDetail(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country');
    }
}
