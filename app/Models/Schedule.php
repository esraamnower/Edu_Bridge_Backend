<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $primaryKey = 'schedule_id';

    protected $fillable = ['course_id', 'day', 'start_time', 'end_time', 'room'];

    public function course() { return $this->belongsTo(Course::class, 'course_id'); }
}
