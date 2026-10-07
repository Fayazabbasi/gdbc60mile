<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class ProgramPart extends Model
{
    protected $table = 'program_part';

    protected $fillable = [
        'program_id',
        'part_id',
        'fees',
    ];

    protected $casts = [
        'fees' => 'decimal:2',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    

    public function part()
{
    return $this->belongsTo(Part::class, 'part_id');
}

}