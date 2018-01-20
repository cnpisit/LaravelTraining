<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
	
	public function index(){
		$authors = Author::get();
		$output['authors'] = $authors;
		return view('author.index')->with($output);
	}
	
	public function form($id=null){
		$output = [];
		if ($id!=null){
			$output['model'] = Author::find($id);
		}
		return view('author.form')->with($output);
	}
	
	public function save(Request $request){
		$input = $request->input;
		if ($request->has('id')){
			$model = Author::find($request->id);
		} else {
			$model = new Author();
		}
		
		$model->fill($input);
		$model->save();
		return redirect('/author');
	}
	
	//Delete
	public function delete($id){
		$model = Author::find($id);
		$model->delete();
		return redirect('/author');
	}
}
