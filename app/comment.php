<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{	

	    /**
     * The model's default values for attributes.
     *
     * @var array
     */

    protected $attributes = [
        'reply_to' => '0',
    ];

    public function user(){
		return $this->belongsTo('App\User');
	}


	public function post(){
        return $this->belongsTo('App\post');
    }


}
