<?php
namespace App\Http\Traits;

use App\Models\Student;

trait StudentTrait {
    public function getStudentDetails($id)
    {

        $student = Student::find($id);
        return $student;
    }
    private function save(Student $student, $request)
    {
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->dob = $request->dob;
        $student->c_address = $request->c_address;
        $student->p_address = $request->p_address;
        $student->gender = $request->gender;
        $student->f_name = $request->f_name;
        $student->f_number = $request->f_number;
        $student->f_email = $request->f_email;
        $student->f_occupation = $request->f_occupation;
        $student->m_name = $request->m_name;
        $student->m_number = $request->m_number;
        $student->m_email = $request->m_email;
        $student->m_occupation = $request->m_occupation;
        $student->l_name = $request->l_name;
        $student->l_number = $request->l_number;
        $student->relation = $request->relation;
        $student->l_email = $request->l_email;
        $student->l_occupation = $request->l_occupation;
        $student->grade = $request->grade;
        $student->last_school = $request->last_school;
        $student->bus_needed = $request->bus_needed;
        $student->pickup_address = $request->pickup_address;
        $student->save();
    }


}
