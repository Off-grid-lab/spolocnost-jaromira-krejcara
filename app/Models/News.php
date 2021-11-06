<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'title',
        'slug',
        'perex',
        'content',
    ];

    public $fillable = [
        'datetime',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
