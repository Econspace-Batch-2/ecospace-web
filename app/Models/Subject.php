<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'subject_image',
        'subject_tutor',
        'subject_title',
        'subject_majors',
        'subject_category',
        'subject_semester',
        'subject_description',
        'subject_references',
        'subject_univ',
        'univ',
        'status',
    ];

    // 1 subject can have many topics
    // 1 topic can only have 1 subject
    public function topics()
    {
        return $this->hasMany(Topic::class, 'subject_id');
    }

    public function mentors()
    {
        return $this->belongsToMany(Mentor::class);
    }
}
