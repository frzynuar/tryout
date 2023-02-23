<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $datatryout = Exam::all();
        return view('user.tryout', compact('datatryout'));
    }

    public function category($id)
    {
        $datatryout = Exam::all()->where('id_category', $id);
        return view('user.category',compact('datatryout'));
    }

    public function question($id)
    {
        $dataquestion = Question::all()->where('id_exam', $id);
        $datacategory = Exam::all()->where('id_category', $id);
        return view('user.question',compact('dataquestion','datacategory'));
    }
}
