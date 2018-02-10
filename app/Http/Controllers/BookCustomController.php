<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookCustomController extends Controller
{
	
	/**
	 * will list all books
	 */
	public function index(){
		$books = Book::all();
		return view('book-custom.index')->with(['books'=>$books]);
	}
	
	
	/**
	 * return book form
	 * if don't have id will return blank form
	 * if have id will return form with data
	 * */
	public function form($id=null){
		$output['authors'] = Author::all();
		$output['publishers'] = Publisher::all();
		if ($id!=null){
			$book = Book::find($id);
			$output['model']=$book;
		}
		return view('book-custom.form')->with($output);
	}
	
	
	/**
	 * return book form
	 * if don't have id mean create new
	 * if have id mean update
	 * */
	public function save(Request $request){
		$input = $request->input;
		if ($request->has('id')){
			$book = Book::find($request->id);
		} else {
			$book = new Book();
		}
//		dd($request->file());
		if ($request->file() && $request->book->getClientOriginalExtension()=='pdf'){
			$input['book'] = Storage::disk('public')->putFile('books', $request->book);
		}
		$book->fill($input);
		$book->save();
		return redirect('/book-custom');
	}
	
	
	/**
	 * delete book by id
	 * */
	public function delete($id){
		Book::where('id',$id)->delete();
		return redirect('/book-custom');
	}
}
