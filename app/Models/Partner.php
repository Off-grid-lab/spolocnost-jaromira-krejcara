<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, HasTranslations;

    public $translatable = [
        'title',
        'link',
    ];

    public $fillable = [
        'title',
        'link',
    ];
}
