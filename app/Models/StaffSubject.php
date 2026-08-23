<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffSubject extends Model
{
    protected $table = 'staff_subject';

    protected $fillable = [
        'staff_id',
        'subject_id',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}