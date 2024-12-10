<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semesters';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'course_id', 'start_date'];
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
