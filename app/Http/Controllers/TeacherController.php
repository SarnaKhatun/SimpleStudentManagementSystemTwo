<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teachers;
    private $teacher;
    public function add ()
    {
        return view('admin.teacher.add');
    }

    public function newTeacher (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image',
            'mobile' => 'required',
            'email' => 'email:rfc,dns|unique:teachers,email',
//            'email' => 'required | unique:teachers',
        ], [
            'name.required' => "nam ta den",
            'mobile.required' => 'ting ting',
        ]);
        Teacher::newTeacher($request);
        return redirect('/add-teacher')->with('message', 'Teacher info created successfully.');
    }

    public function manage ()
    {
        $this->teachers = Teacher::all();
        return view('admin.teacher.manage', [
            'teachers' =>  $this->teachers,
            ]);
    }

    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', [
           'teacher' => $this->teacher,
        ]);
    }

    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/manage-teacher')->with('message', 'Teacher info updated successfully.');

    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/manage-teacher')->with('message', 'Teacher info deleted successfully.');

    }
}
