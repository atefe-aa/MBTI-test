<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function show_homepage () {
        return view('home');
    }

    public function show_questions () {
        $all_questions = Questions::all();
        $data = array();

        foreach ($all_questions as $question){
            if ($question['parent_id'] === 0){
                $data[$question['id']]['question'] = $question['question_option'];
            }else{
                $data[$question['parent_id']]['options'][$question['id']]= $question['question_option'];
            }
        }
        return view('questions',['data' => $data]);
    }
}
