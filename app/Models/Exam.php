<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exams';

    protected $guarded = [];
    
    public function Category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function Question()
    {
        return $this->hasMany('App\Models\Question', 'question_id');
    }
}
