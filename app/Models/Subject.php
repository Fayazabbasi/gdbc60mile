<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'credit_hours',
        'is_active',
    ];

    protected $casts = [
        'credit_hours' => 'integer',
        'is_active' => 'boolean',
    ];

    /**
     * Programs that offer this subject.
     */
    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_subject')
            ->withTimestamps();
    }

    public function staff()
{
    return $this->belongsToMany(Staff::class, 'staff_subject')
        ->withTimestamps();
}
}