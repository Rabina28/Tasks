<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('crud.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the Field

        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->dob = $request->dob;
        $student->c_address = $request->c_address;
        $student->p_address = $request->p_address;
        $student->gender = $request->gender;
        $student->f_name = $request->f_name;
        $student->f_number = $request->f_number;
        $student-> f_email = $request-> f_email;
        $student-> f_occupation = $request-> f_occupation;
        $student->m_name = $request->m_name;
        $student->m_number = $request->m_number;
        $student-> m_email = $request-> m_email;
        $student-> m_occupation = $request-> m_occupation;
        $student->l_name = $request->l_name;
        $student->l_number = $request->l_number;
        $student->relation = $request->relation;
        $student-> l_email = $request-> l_email;
        $student-> l_occupation = $request-> l_occupation;
        $student->grade = $request->grade;
        $student->last_school = $request->last_school;
        $student->bus_needed = $request->bus_needed;
        $student->pickup_address = $request->pickup_address;
        $student->save();
        return redirect()->route('application.index')->with('message', 'New Student Created Successfull !');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('crud.read', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('crud.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the Field


        $student = Student::find($id);
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->dob = $request->dob;
        $student->c_address = $request->c_address;
        $student->p_address = $request->p_address;
        $student->gender = $request->gender;
        $student->f_name = $request->f_name;
        $student->f_number = $request->f_number;
        $student-> f_email = $request->f_email;
        $student-> f_occupation = $request->f_occupation;
        $student->m_name = $request->m_name;
        $student->m_number = $request->m_number;
        $student->m_email = $request-> m_email;
        $student->m_occupation = $request-> m_occupation;
        $student->l_name = $request->l_name;
        $student->l_number = $request->l_number;
        $student->relation = $request->relation;
        $student-> l_email = $request->l_email;
        $student->l_occupation = $request->l_occupation;
        $student->grade = $request->grade;
        $student->last_school = $request->last_school;
        $student->bus_needed = $request->bus_needed;
        $student->pickup_address = $request->pickup_address;
        $student->save();
        return redirect()->route('application.index')->with('message', 'Student Updated Successfull !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        return back()->with('message', 'Student Deleted Successfull !');
    }




}
