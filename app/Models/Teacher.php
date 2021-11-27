<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\University;
use App\Models\Department;
use App\Models\Center;
use App\Models\Subject;
use App\Models\Comment;
use App\Models\Average;

class Teacher extends Model
{
    use HasFactory;

    public function university() {
        return $this->belongsTo(University::class, 'id');
    }

    public function department() {
        return $this->belongsTo(Department::class, 'id');
    }

    public function center() {
        return $this->belongsTo(Center::class, 'id');
    }

    // has many

    public function subjects() {
        return $this->hasMany(Subject::class, 'teacher_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'teacher_id');
    }

    public function averages() {
        return $this->hasMany(Average::class, 'teacher_id');
    }


}
