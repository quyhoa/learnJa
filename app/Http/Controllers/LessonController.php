<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function listLesson($id)
    {
    	return view('lesson.show');
    }
}
