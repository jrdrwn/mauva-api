<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'summary',
        'content',
        'status',
        'category',
        'image',
    ];
}
