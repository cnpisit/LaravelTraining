<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * method: get
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$books = Book::all();
		return view('book.index')->with(['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     * method: get
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     * method: post
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$input = $request->input;
		$book = new Book();
		$book->fill($input);
		$book->save();
		return redirect('/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return "read one book";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$book = Book::find($id);
		return view('book.update')->with(['model'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$input = $request->input;
		$book = Book::find($id);
		$book->fill($input);
		$book->save();
		return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Book::where('id',$id)->delete();
		return redirect('/book');
    }
}
