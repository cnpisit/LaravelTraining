<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
	
	
	public function view($id=0){
		return view('home.index',['id'=>$id]);
	}
}
