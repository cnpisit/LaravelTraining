<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    //authors
	protected $table='author';
	
	use SoftDeletes;
	
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	//tell model that which attribute that can be initial value
	protected $fillable = [
		'name',
		'gender',
		'dob'
	];
	
//	//for validate value while insert
//	public function rule(){
//
//	}
//
//	//for custom message error
//	public function message(){}
//
	public function books(){
		return $this->hasMany('App\Models\Book','author_id');
	}

}
