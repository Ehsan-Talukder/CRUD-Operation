<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

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
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }


    public function studentAdd()
    {
        return view ('pages.student.add');
    }

    public function studentAddSubmitted(Request $request)
    {
        $validate= $request->validate
        ([
            'id'=> 'required',
            'name'=> 'required',
            'email'=> 'required|regex:/@/',
            'mobile'=> 'required',
            'username'=> 'required|regex:/^([0-9\s\-\+\(\)]*)/',
            'password'=> 'required|regex:/^([0-9\s\-\+\(\)]*)/'
        ],
    [
        'name.required'=> 'Please Enter your Name',
    ]
    );

        $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->username = $request->username;
        $student->password = $request->password;
        $student->save();
        return redirect()->route('studentList');
        // return $student;
    }

    public function studentList()
    {
        $students=student::all();
        return view ('pages.student.list')-> with('students', $students);
        // return $student;
    }

    public function studentEdit(Request $request)
    {
        $students= student::where('id', $request->id)->first();
        return view ('pages.student.studentedit')-> with('students', $students);
        // return $student;
    }

        public function studentEditSubmitted(Request $request)
    {
        $student= student::where('id', $request->id)->first();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->username = $request->username;
        $student->password = $request->password;
        $student->save();
        return redirect()-> route('studentList');
        // return $student;
    }

    public function studentDelete(Request $request)
    {
        $student= student::where('id', $request->id)->first();
        $student->delete();
        return redirect()-> route('studentList');
        // return $student;
    }
}
