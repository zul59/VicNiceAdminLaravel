<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class RiskCategory extends Model
{
    protected $table = 'riskcategory';

    protected $guarded = []; // YOLO

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->risk_category_id = (string) Str::uuid();
        });
    }
}
