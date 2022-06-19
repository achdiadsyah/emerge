<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'id_card_number',
        'id_card_photo',
        'npwp_photo',
        'phone_number',
        'referral_name',
        'address',
        'country_id',
        'province_id',
        'city_id',
        'annual_income_id',
        'investing_reason_id',
        'is_individual_investor'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


