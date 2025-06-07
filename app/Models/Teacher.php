<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'email', 'subject_id', 'photopath'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
