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
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	//tell model that which attribute that can be initial value
	protected $fillable = [
		'name',
		'gender',
		'dob',
		'email'
	];
	
	/**
	 * Defined Rule in model for validate input before save data
	 */
	public function rule($id=null){
		return [
			'name'=>'required',
			'gender'=>'required',
			'dob'=>'required',
			'email'=>'required|unique:author,email,'.$id,
		];
	}

	/**
	 * Custom message for error
	 * message error is optional
	 */
	public function message(){
		return [
			'email.unique'=>'សារអេឡិច្ត្រូនិចនេះប្រើរូចម្តងហើយ',
			'email.required'=>'អ្នកត្រូវតែបំពេញសាអេឡិចត្រូនិចនេះ'
		];
	}

	public function books(){
		return $this->hasMany('App\Models\Book');
	}

}
