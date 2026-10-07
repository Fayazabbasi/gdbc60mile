<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    protected $fillable = [
        'title',
        'category',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'description',
        'link',
        'status',
    ];
    protected $casts = [
        'event_date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'status' => 'boolean',
    ];
}