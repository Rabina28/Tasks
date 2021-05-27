<?php

namespace App\Http\Controllers\Admin;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  index(){
        $students = Student::all();
        return view('admin.dashboard')->with('students', $students);
    }

    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('admin.student.read',compact('students'));

    }

    public function edit($id)
    {
        $students = Student::findOrfail($id);
        return view('admin.student.edit')->with('students', $students);
    }

    public function update(Request $request, $id)
    {
        $students = Student::findOrfail($id);
        $students->firstname = $request->input('firstname');
        $students->lastname = $request->input ('lastname');
        $students->gender = $request->input ('gender');
        $students->dob = $request->input ('dob');
        $students->c_address = $request->input('c_address');
        $students->p_address = $request->input('p_address');
        $students->f_name = $request->input('f_name');
        $students->f_number = $request->input('f_number');
        $students-> f_email = $request-> input('f_email');
        $students-> f_occupation = $request-> input('f_occupation');
        $students->m_name = $request->input('m_name');
        $students->m_number = $request->input('m_number');
        $students-> m_email = $request-> input('m_email');
        $students-> m_occupation = $request-> input('m_occupation');
        $students->l_name = $request->input('l_name');
        $students->l_number = $request->input('l_number');
        $students->relation = $request->input('relation');
        $students-> l_email = $request-> input('l_email');
        $students-> l_occupation = $request-> input('l_occupation');
        $students->grade = $request->input('grade');
        $students->last_school = $request->input('last_school');
        $students->bus_needed = $request->input('bus_needed');
        $students->pickup_address = $request->input('pickup_address');
        $students->update();

        return redirect('home')->with('students', 'student data is successfully updated');
    }



    public function delete($id)
    {
        $students = Student::findOrFail($id);
        $students->delete();

        return redirect('home')->with('students', 'student data is deleted successfully');

    }




}
