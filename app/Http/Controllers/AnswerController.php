<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;

class AnswerController extends Controller
{
    public function answer(Request $request){
        $answer=new Answer();
        $answer->id=$request->get('id');
        $answer->body=$request->get('body');
        $answer->question_id=$request->get('question_id');
        $answer->user_id=$request->get('user_id');
        $answer->save();
     return redirect ('/question');
    }
}
