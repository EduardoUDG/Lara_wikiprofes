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

        return view('teachers.teacherCreate', compact('universities', 'centers', 'centers'));
    }

    public function store(Request $request)
    {
        //
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
