<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStaff extends Model
{
    use HasFactory;

    protected $table = 'program_staff';

    protected $fillable = [
        'program_id',
        'staff_id',
        'designation',
        'is_coordinator',
        'staff_type'
    ];

    protected $casts = [
        'is_coordinator' => 'boolean',
    ];

    /**
     * Program assigned to this record.
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Staff member assigned to this program.
     */
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}