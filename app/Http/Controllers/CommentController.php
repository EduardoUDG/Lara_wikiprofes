<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Teacher;

class CommentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Teacher $teacher)
    {

        $comment = new Comment();
        $comment->description = $request->description;
        $comment->user_id = $request->user_id;
        $comment->teacher_id = $request->teacher_id;
        $comment->subject_id = $request->subject_id;

        $comment->save();
        return redirect()->route('teachers.show', $teacher);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
