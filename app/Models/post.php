<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->hasMany(comment::class, 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class, 'tag_posts','post_id','tag_id');
    }
    public function post_owner()
    {
             return $this->belongsTo(User::class, 'author_id');
    }
}
