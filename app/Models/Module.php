<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id', 'name', 'lead_tutor_id'
    ];

    public function leader()
    {
        return $this->belongsTo(Tutor::class, 'lead_tutor_id');
    }

    public function tutorials()
    {
        return $this->hasMany(Tutorial::class);
    }

    public function getUniqueTutorsAttribute()
    {
        $tutor = collect([$this->leader]);

        foreach ($this->tutorials as $tutorial) {
           $tutor = $tutor->merge($tutorial->tutors);
        }

        return $tutor->unique('id');
    }
}
