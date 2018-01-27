<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
	use SoftDeletes;
	
	protected $table = 'publisher';
	protected $dates = ['deleted_at'];
	
	public $fillable = [
		'name',
		'address'
	];
	
	public function books(){
		return $this->hasMany('App\Models\Book');
	}
}
