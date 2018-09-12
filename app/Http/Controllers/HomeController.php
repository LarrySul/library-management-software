<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Validator;

use App\Book;

use App\User;

use App\Student;

use Session;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @ret
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user = User::all();
        $book = Book::all();
        $student = Student::all();
        return view('admin.welcome', ['user' => $user, 'book' => $book, 'student' => $student]);
    }
    public function index(){
        return view ('admin.addBook');
    }

   
}
