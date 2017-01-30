<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

    protected $fillable = [
        'post_id', 'user_id', 'liked', 'disliked'
    ];
    public $timestamps = false;

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function scopeCountLikes($query) {
        return $query->where('liked', 1)->count();
    }

    public function scopeCountDislikes($query) {
        return $query->where('disliked', 1)->count();
    }

}
