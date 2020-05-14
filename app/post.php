<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function comments(){
		return $this->hasMany('App\comment');
	}

	public function saves(){
		return $this->belongsToMany('App\User');
	}
	public function votes(){
		return $this->hasMany('App\Vote');
	}
}
