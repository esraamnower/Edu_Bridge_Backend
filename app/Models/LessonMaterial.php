<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonMaterial extends Model
{
   protected $primaryKey = 'material_id';

    protected $fillable = ['lesson_id', 'type', 'file_url', 'available_offline'];

    public function lesson() { return $this->belongsTo(Lesson::class, 'lesson_id'); }
}
