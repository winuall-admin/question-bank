<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{
      public function store(Request $request)
      {
          Question::create([
            'question'  =>  $request['question'],
            'topic_id'  =>  $request['topic_id'],
            'user_id'   =>  Auth::user()->id
          ]);
      }
}
