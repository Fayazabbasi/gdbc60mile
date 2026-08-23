<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'part',
        'slug',
        'code',
        'description',
        'duration',
        'degree_type',
        'eligibility',
        'fee',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'fee' => 'decimal:2',
    ];

    /**
     * Staff assigned to this program.
     */
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'program_staff')
            ->withPivot([
                'designation',
                'is_coordinator',
            ])
            ->withTimestamps();
    }

    public function subjects()
{
    return $this->belongsToMany(Subject::class, 'program_subject')
        ->withTimestamps();
}
}