<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\task;

class Task extends Model
{
    protected $fillable = ['content','status','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
