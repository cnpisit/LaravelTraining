<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
	use SoftDeletes;
	
	protected $table = 'book';
	protected $dates = ['deleted_at'];
	
	public $fillable = [
		'title',
		'generation',
		'publisher_id',
		'author_id',
		'publish_date',
	];
}
