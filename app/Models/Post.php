<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['body'];

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
    /*public function ownedBy(User $user)
    {
        return $user->id === $this->user_id;
    }*/
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }
}