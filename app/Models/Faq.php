<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

class Faq extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, HasTranslations;

    protected $table = 'faq';

    public $translatable = [
        'title',
        'content',
    ];

    public $fillable = [
        'title',
        'content',
    ];
}
