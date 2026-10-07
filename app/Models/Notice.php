<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'attachment',
        'notice_date',
        'expiry_date',
        'is_published',
        'is_important',
    ];

    protected $casts = [
        'notice_date' => 'date',
        'expiry_date' => 'date',
        'is_published' => 'boolean',
        'is_important' => 'boolean',
    ];
}