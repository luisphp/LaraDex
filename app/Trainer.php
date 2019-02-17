<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','avatar','slug','updated_at'];

    	/**
		 * Get the route key for the model.
 		 *
		 * @return string
	     */
		public function getRouteKeyName()
		{
   		 return 'slug';
		}



}
