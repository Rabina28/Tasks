<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentManagementController extends Controller
{
    public function index()
    {

       //dd($students);

        return view('admin.index')->with('students', $students);

    }
}
