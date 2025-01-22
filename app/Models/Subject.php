<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'tutor',
        'title',
        'majors',
        'category',
        'semester',
        'description',
        'references',
        'subject_univ',
        'univ',
        'status',
        'appointlet_url'
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

    public function faqs()
    {
        return $this->hasMany(SubjectUnivFaq::class, 'subject_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function appointments()
    {
        // Return appointments that are not cancelled
    }
}
