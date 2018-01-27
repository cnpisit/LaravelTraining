<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;


class PublisherController extends Controller
{
	
	public function index(){
		$authors = Publisher::get();
		//map data that get from database with one key in array associative
		$output['publishers'] = $authors;
		
		return view('publisher.index')->with($output);
	}
	
	public function form($id=null){
		$output = [];
		if ($id!=null){
			//select * from author where id=$id; Then map to array associative
			$output['model'] = Publisher::find($id);
		}
		return view('publisher.form')->with($output);
	}
	
	public function save(Request $request){
		$input = $request->input;
		if ($request->has('id')){
			$model = Publisher::find($request->id);
		} else {
			$model = new Publisher();
		}
		
		$model->fill($input);
		$model->save();
		return redirect('/publisher');
	}
	
	//Delete
	public function delete($id){
		$model = Publisher::find($id);
		$model->delete();
		return redirect('/publisher');
	}
}
