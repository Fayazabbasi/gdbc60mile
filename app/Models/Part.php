<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Part extends Model
{
    protected $table = 'parts';

    protected $fillable = [
        'name',
    ];

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class, 'part_id');
    }
}