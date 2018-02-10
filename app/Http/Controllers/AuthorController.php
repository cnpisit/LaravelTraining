<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AuthorController extends Controller
{
	
	public function index(){
		$authors = Author::get();
		//map data that get from database with one key in array associative
		$output['authors'] = $authors;
		
		return view('author.index')->with($output);
	}
	
	public function form($id=null){
		$output = [];
		if ($id!=null){
			//select * from author where id=$id; Then map to array associative
			$output['model'] = Author::find($id);
		}
		return view('author.form')->with($output);
	}
	
	public function save(Request $request){
		$input = $request->input;
		$rule = [];
		if ($request->has('id')){
			$model = Author::find($request->id);
			$rule = $model->rule($request->id);
		} else {
			$model = new Author();
			$rule = $model->rule();
		}
		
		/**
		 * function validation will return back with error and input
		 */
		Validator::make($input, $rule, $model->message())->validate();
		$model->fill($input);
		$model->save();
		return redirect('/author')->with('success','Author has been saved..!');
	}
	
	//Delete
	public function delete($id){
		$return = 'false';
		$model = Author::find($id);
		if ($model!=null){
			$model->delete();
			$return = 'true';
		}
		
		return $return;
	}
}
