<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id_card',
        'date_of_birth',
        'subject_id'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
