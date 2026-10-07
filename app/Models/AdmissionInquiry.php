<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdmissionInquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'program_id',
        'message',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}