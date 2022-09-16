<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $fillable = [
        'module_id', 'time_start', 'time_end', 'room'
    ];
    
    public function tutors()
    {
        return $this->belongsToMany(Tutor::class);
    }
}
