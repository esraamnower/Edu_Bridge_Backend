<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
  protected $table = 'parents'; // ربطناه بجدول parents
    protected $primaryKey = 'parent_id';

    protected $fillable = ['user_id'];

    public function user() { return $this->belongsTo(User::class, 'user_id'); }
    public function students() { return $this->hasMany(Student::class, 'parent_id'); }
}
