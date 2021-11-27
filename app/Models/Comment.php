<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    public function teacher() {
        return $this->belongsTo(Teacher::class, 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

    public function subject() {
        return $this->belongsTo(Subject::class, 'id');
    }


}
