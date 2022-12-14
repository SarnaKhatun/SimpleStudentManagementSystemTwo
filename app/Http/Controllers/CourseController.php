<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;
class CourseController extends Controller
{
    private $courses;
    private $course;
    public function add ()
    {
        return view('teacher.course.add');
    }

    public function create (Request $request)
    {
        Course::newCourse($request);
        return redirect()->back()->with('message', ' Course info created successfully');
    }

    public function manage ()
    {
//        $this->courses = Course::all();
        $this->courses = Course::where('teacher_id', Session::get('teacher_id'))->get();
        return view('teacher.course.manage', [
            'courses' => $this->courses,
        ]);
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.edit', [
            'course' => $this->course,
        ]);
    }

    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.detail', [
            'course' => $this->course,
        ]);
    }

    public function update (Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/manage-course')->with('message', ' Course info updated successfully');

    }

    public function delete(Request $request, $id)
    {
        Course::deleteCourse($id);
        return redirect()->back()->with('message', ' Course info deleted successfully');
    }
}
