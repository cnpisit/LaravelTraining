<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
	
	
	public function index(){
		return view('sample.index');
	}
	
	public function view($id=null){
		return view('sample.view',['id'=>$id]);
	}
	
	public function qView(Request $request){
		//to print all requested input
		dd($request->all());
		var_dump($request->all());
		return view('sample.view', $request->all());
	}
	
	public function form(){
		return view('sample.form');
	}
}
