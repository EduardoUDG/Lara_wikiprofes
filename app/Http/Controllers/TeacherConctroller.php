<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Department;
use App\Models\Center;

class TeacherConctroller extends Controller
{

    public function index()
    {
        $teachers = Teacher::paginate(5);
        return view('teachers.teacherIndex', compact('teachers'));
    }

    public function create()
    {
        $universities = University::all();
        $departments  = Department::all();
        $centers      = Center::all();

        return view('teachers.teacherCreate', compact('universities', 'departments', 'centers'));
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->university_id = $request->university_id;
        $teacher->department_id = $request->department_id;
        $teacher->center_id = $request->center_id;

        $teacher->save();
        return redirect()->route('teachers.index')->with('infor', 'Profesor creado correctamente');
    }

    public function show($teacher)
    {
        //
    }

    public function edit($teacher)
    {
        //
    }

    public function update(Request $request, $teacher)
    {
        //
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('info', 'Profesor eliminado correctamente');
    }

}
