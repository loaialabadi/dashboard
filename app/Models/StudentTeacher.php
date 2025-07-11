<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentTeacher extends Model
{
    protected $table = 'student_teacher'; // إذا كان اسم الجدول مختلفًا

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}