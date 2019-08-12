<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'title', 'article_text'];

    public function scopeNewest($query){
        return $query->where('created_at', '>', now()->subDays(1));
    }
}
