<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    // 1 topic can only have 1 subject
    protected $fillable = [
        'title',
        'description',
        'materials',
        'subject_id'
    ];
    // 1 subject can have many topic
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
