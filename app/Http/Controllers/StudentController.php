<?php

namespace App\Http\Controllers;

use App\Student;
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
        $students = Student::all();
        return view('admin.student.index', ['students'=>$students]);
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
    public function store(Request $request)
    {
        // validate the students up comming data
        $this->validate($request, [
            'name'=> 'required',
            'father_name'=> 'required',
            'mother_name'=> 'required',
            'present_address'=> 'required',
            'permanent_address'=> 'required',
            'picture'=> 'required',
            'contact'=> 'required',
        ]);
        // validate up-comming
        if ($request->hasFile('picture')) {
            $imgStore = Storage::putFile('public/students', $request->file('picture'));
        }
        // create student class object
        $student = new Student();
        // store upcomming data into variable
        $student->reg = $request->reg;
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->present_address = $request->present_address;
        $student->permanent_address = $request->permanent_address;
        $student->contact = $request->contact;
        $student->picture = ($request->hasFile('picture')) ? $imgStore: "";
        // store data into the Database
        $student->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
