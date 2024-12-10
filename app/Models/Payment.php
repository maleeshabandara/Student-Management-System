<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'paid_date', 'amount'];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
