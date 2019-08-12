<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ArticleUserScope;

class Article extends Model
{
    protected $fillable = ['user_id', 'title', 'article_text'];

    // public function scopeNewest($query){
    //     return $query->where('created_at', '>', now()->subDays(1));
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope(new ArticleUserScope());
    // }
}
