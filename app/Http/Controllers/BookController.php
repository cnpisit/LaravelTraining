<?php

namespace App\Http\Controllers;

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
        return view('book.index');
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
		dd($request->all());
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
    	$book = [
    		'title'=>'Laravel 5.3',
			'generation'=>1,
			'publisher_id'=>'sokleng',
			'author_id'=>'Mr.Ratana',
			'publish_date'=>'2017-11-11'
		];
		return view('book.update')->with($book);
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
		return dd($request->input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		return "delete this book";
    }
}
