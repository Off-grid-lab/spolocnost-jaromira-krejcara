<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\Sluggable;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\SluggableScopeHelpers;

class News extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, HasTranslations, Sluggable, SluggableScopeHelpers;

    public $translatable = [
        'title',
        'slug',
        'perex',
        'content',
    ];

    public $fillable = [
        'title',
        'slug',
        'perex',
        'content',
        'datetime',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }
}
