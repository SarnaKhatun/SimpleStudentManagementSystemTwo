<?php

namespace App\Http\Controllers;

use App\Models\Student;
use http\Message;
use Illuminate\Http\Request;
use DB;

class AdminStudentController extends Controller
{
    private $students;
    private $message;
    public function manage()
    {

        $this->students = Student::orderBy('id', 'DESC')->get();   //ORM method.....amra always eita diyei kaj kri

        //.................This two are same as the above.....

//      $this->students = DB::table('students')->get('*'); //Query Builder
//        $this->students = DB::select('SELECT * FROM students'); // Raw Query


        return view('admin.student.manage', [
            'students' => $this->students,
        ]);
    }

    public function updateStatus ($id)
    {
       $this->message = Student::updateStatus($id);
        return redirect()->back()->with('message', $this->message);
    }
}
