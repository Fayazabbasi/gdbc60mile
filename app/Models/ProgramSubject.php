<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramSubject extends Model
{
    protected $table = 'program_subject';

    protected $fillable = [
        'program_id',
        'subject_id',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}