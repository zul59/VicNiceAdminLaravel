<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class StandarAcademic extends Model
{
    protected $table = 'standaracademic';

    protected $guarded = []; // YOLO

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->standar_academic_id = (string) Str::uuid();
        });
    }
}
