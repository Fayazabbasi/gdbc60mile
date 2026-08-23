<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    /**
     * Staff members assigned to this role.
     */
    public function staff()
    {
        return $this->hasMany(Staff::class, 'role_id');
    }

    /**
     * Only active roles.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}