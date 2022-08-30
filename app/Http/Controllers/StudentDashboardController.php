<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Session;

class StudentDashboardController extends Controller
{
    public $enrolledCourses;

    public function index ()
    {
        return view('student.home.home');
    }

    public function courses()
    {
        $this->enrolledCourses = Enroll::where('student_id', Session::get('student_id'))->orderBy('id', 'DESC')->get();
        return view('student.enrolled.courses', [
            'enrolledCourses' => $this->enrolledCourses,
        ]);
    }
}
