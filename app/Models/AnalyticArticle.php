<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalyticArticle extends Model
{
    protected $table = 'analytic_articles';
    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
