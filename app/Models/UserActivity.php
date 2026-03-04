<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = 'user_activity';
    protected $primaryKey = 'activity_id';

    protected $fillable = ['user_id', 'activity_type', 'activity_date'];
    
    public $timestamps = false;

    public function user() { return $this->belongsTo(User::class, 'user_id'); }
}
