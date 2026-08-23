<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'staff';

    protected $fillable = [
        'employee_code',
        'name',
        'father_name',
        'cnic',
        'email',
        'phone',
        'address',
        'designation',
        
        'qualification',
        'specialization',
        
        'role_id',
        'parent_id',
        'sort_order',
        'photo',
        'bio',
        'joining_date',
        'leaving_date',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'joining_date' => 'date',
            'leaving_date' => 'date',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    /**
     * Staff belongs to a department.
     */
    // public function department()
    // {
    //     return $this->belongsTo(Department::class);
    // }

    /**
     * Staff belongs to a role.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Staff belongs to another staff member in the hierarchy.
     *
     * Example:
     * Regional Director
     *       ↓
     * Principal
     *       ↓
     * Lecturer
     */
    public function parent()
    {
        return $this->belongsTo(Staff::class, 'parent_id');
    }

    /**
     * Staff members directly under this staff member.
     */
    public function children()
    {
        return $this->hasMany(Staff::class, 'parent_id');
    }

    /**
     * User account associated with this staff member.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Scope active staff.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function subjects()
{
    return $this->belongsToMany(Subject::class, 'staff_subject')
        ->withTimestamps();
}
}