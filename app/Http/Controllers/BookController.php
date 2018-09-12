<?php

namespace App\Http\Controllers;

use App\Book;

use Session;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addbook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
  
    // query to add books in dbase
	public function addBook(Request $request){
		$this->validate($request, [
			'author'=> 'required|min:5|string',
            'title' => 'required|string',
            'isbn' => 'required|min:3',
            'category' => 'required|string',
            'status' => 'required',
            'year' => 'required|min:4',
			'upload' => 'required'	
		]);

		$book = $request ->file('upload');
		$filename = $book->getClientOriginalName();
		$book->move('book', $filename);
	

		$book = new Book(); 
		$book->author = $request->author;
		$book->title = $request->title;
		$book->isbn = $request->isbn;
        $book->category = $request->category;
        $book->status = $request->status;
        $book->year = $request->year;
		$book->upload =$filename;
		$book->save();

		Session::flash('flash_message', 'Book successfully added!');
		return redirect('admin/allBooks');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->search;
        return Book::where('author','LIKE','%'.$search.'%')->get();
        // $book = Book::all();
		// return response()->json(['book'=>$book], 200);
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    // public function show(Book $book)
    // fetch all available books in dbase
	public function allAvailableBooks ()
	{
		$books = Book::all();
		return view('admin.allBooks', compact('books'));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    // public function edit(Book $book)
    // edit available books
    public function edit($id)
	{
		$book = Book::find($id);
		return view('admin.editBook', ['book' => $book]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Book $book)
    // update all books
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'author'=> 'required|min:5|string',
            'title' => 'required|string',
            'isbn' => 'required|min:3',
            'category' => 'required|string',
            'status' => 'required',
            'year' => 'required|min:4',
			'upload' => 'required'	
		]);

		$book = $request ->file('upload');
		$filename = $book->getClientOriginalName();
		$book->move('book', $filename);

		$book = Book::find($id);
		$book->author = $request->author;
		$book->title = $request->title;
		$book->isbn = $request->isbn;
        $book->category = $request->category;
        $book->status = $request->status;
        $book->year = $request->year;
		$book->upload =$filename;
		$book->save();

		Session::flash('flash_message', 'Books successfully updated!');
		return redirect('admin/allBooks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Book $book)
    // delete all books in shelf
    public function destroy($id)
	{
		$book = Book::destroy($id);
		Session::flash('flash_message', 'Book deleted!');
        return redirect('admin/allBooks');
    }
}
