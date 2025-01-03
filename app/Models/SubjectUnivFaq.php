<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectUnivFaq extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'subject_id',
        'univ',
        'faq_question',
        'faq_answer',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
