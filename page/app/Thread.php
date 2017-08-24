<?php

namespace App;

class Thread extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function comment() {
    	return $this->hasMany(Comment::class);
    }
}
