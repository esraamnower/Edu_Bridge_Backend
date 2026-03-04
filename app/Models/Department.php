<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';

    protected $fillable = ['name', 'description'];

    public function heads() { return $this->hasMany(Head::class, 'department_id'); }
    public function courses() { return $this->hasMany(CourseDepartment::class, 'department_id'); }
}
