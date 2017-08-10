<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //Determine which post the comment belongs to
    public function post() {

    	return $this->belongsTo(Post::class);

    }

    public function user() {

    	return $this->belongsTo(User::class);

    }
}
