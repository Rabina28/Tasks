<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
Use App\Http\Requests\StorePostRequest;
use App\Http\Traits\StudentTrait;

class CRUDController extends Controller
{
    use StudentTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $student = $this->getStudentDetails(5);
        //dd($student);

        $students = Student::paginate(10);
        return view('crud.create');
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

    public function store(StorePostRequest $request)
    {
        // Validate the Field
        $student = new Student();
        $this->save($student, $request);
        return redirect()->route('application.create')->with('message', 'New student created Successfull !');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = $this -> getStudentDetails($id);
        //dd($student);
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
        $student = $this -> getStudentDetails($id);
       //dd($student);
        return view('crud.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        // Validate the Field
        $student = Student::find($id);
        $this->save($student, $request);
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
