<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Startup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'website',
        'startup_category_id',
        'country_id',
        'description',
        'document',
        'video_teaser',
        'product_name',
        'product_detail',
        'target_market',
        'photos',
        'valuation',
        'fundraising',
        'fundraising_detail',
        'about_founders',
        'startup_point',
    ];

    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
