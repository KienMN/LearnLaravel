<?php

namespace App;


class Post extends Model
{
    
	//Determine comments of the post

	public function comments() {
		return $this->hasMany(Comments::class);
	}


	public function user() {

    	return $this->belongsTo(User::class);

    }
}
