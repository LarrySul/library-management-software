<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\Validator;

use Illuminate\Http\Request;

use JWTSubject;

use App\Student;

use App\User;

use Config;


use JWTAuth;

use Session;

use DB;

use JWTException;

//include_once 'connx.php';

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
       	$this->validate($request, [
            'firstname'=> 'required|string',
            'lastname'=> 'required|string',
			'email'=> 'required|email|unique:students',
			'gender' => 'required|string',
            'matric' => 'required',
			'college' => 'required|string',
            'department' => 'required|string',
            'phone' => 'required',
			'password' => 'required',
						
        ]);
        
		$student = new Student(); 
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
		$student->gender = $request->gender;
		$student->matric = $request->matric;
		$student->department = $request->department;
		$student->college = $request->college;
        $student->email = $request->email;
		$student->password = bcrypt($request->password);
		$student->phone = $request->phone;
		// $student->upload =$filename; 
		$student->save();
		return response()->json([
			'success' => 'Successfully registered student !'
		], 200);
	
    }

    public function signin(Request $request){
        $this->validate($request, [
			'firstname' => 'required',
			'matric' => 'required'
		]);

        $firstname = $request->firstname;
        $matric = $request->matric;
        
        $results = DB::select("select * FROM students 
        WHERE firstname = '$firstname' && matric = '$matric'");
            if (count($results) ==  1) {
			foreach ($results as $user) {
                $_SESSION['matric']= $matric; 
                $_SESSION['id']= $user->id; 
            }
		    return response()->json([
			'success' => 'Login successful !'
		], 200);
		}
		else {
			return response()->json([
			'fail' => 'Invalid credentials'
		], 401);
		}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::all();
        return view('admin.regStudents', compact('student'));	
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $id)
    {
        //delete a student
        $student = Student::destroy($id);
		Session::flash('flash_message', 'Student record was deleted!');
        return redirect('admin/regStudent');
    }
}
