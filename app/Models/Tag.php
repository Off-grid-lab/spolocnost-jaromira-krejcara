<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\Sluggable;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\SluggableScopeHelpers;

class Tag extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, HasTranslations, Sluggable, SluggableScopeHelpers;

    public $translatable = [
        'title',
        'slug',
    ];

    public $fillable = [
        'title',
        'slug',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }
}
