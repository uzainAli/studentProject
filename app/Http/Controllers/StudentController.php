<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function showStudent()
    {
        $students=DB::table('students')->get();
        return view('showStudent',compact('students'));
    }
    public function addStudent()
    {
        return view('addStudent');
    }
    public function saveStudent(Request $request)
    {
        Db::table('students')->insert([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'cnic_no'=>$request->cnic_no,
            'course'=>$request->course,
            'father_contact'=>$request->father_contact,
            'mobile_no'=>$request->mobile_no,
            'age'=>$request->age
        ]);
        return back()->with('add_student','Student added succesfully');
    }
    public function editStudent($id)
    {
      $student=DB::table('students')->where('id',$id)->first();
      return view('editStudent',compact('student'));
    }
    public function updateStudent(Request $request)
    {
        DB::table('students')->where('id',$request->id)->update([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'cnic_no'=>$request->cnic_no,
            'course'=>$request->course,
            'father_contact'=>$request->father_contact,
            'mobile_no'=>$request->mobile_no,
            'age'=>$request->age
        ]);
        return back()->with('student-update','student updated succesfully');
    }
    public function deleteStudent($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return back()->with('student-deleted','student deleted succesfully');
    }
}
