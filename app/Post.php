<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function ownedBy(\App\User $user)
    {
        return $this->user_id == $user->id;
    }
}
