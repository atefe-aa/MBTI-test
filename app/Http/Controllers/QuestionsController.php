<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use App\Models\Result;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function show_result(Request $request){

        $inputs = $request->all();
        $options = Questions::where('parent_id', '!=', '0')->get();
        $option_array = array();
        foreach ($options as $option){
            $option_array [$option['id']] = [
                'score' => $option['score'],
                'type' => $option['type']
            ];
        }

        $scores = [
            'E' => 0,
            'I' => 0,
            'S' => 0,
            'N' => 0,
            'T' => 0,
            'F' => 0,
            'J' => 0,
            'P' => 0,
        ];
        foreach ($inputs as $item) {
            if (isset($option_array[$item])){
                $type =  $option_array[$item]['type'];
                $score = $option_array[$item]['score'];

                if (isset($scores[$type])) {
                    $scores[$type] += $score;
                }
            }
        }

// Access the cumulative scores for each type using the keys of the $scores array
        $code = $scores['I'] >= $scores['E'] ? 'I' : 'E';
        $code .= $scores['N'] >= $scores['S'] ? 'N' : 'S';
        $code .= $scores['F'] >= $scores['T'] ? 'F' : 'T';
        $code .= $scores['P'] >= $scores['J'] ? 'P' : 'J';

        $all_results = Result::all();
        $result_array = array();
        foreach ($all_results as $result){
            $result_array [$result['code']] = [
                'code' => $result['code'],
                'name' => $result['name'],
                'paragraph' => $result['paragraph'],
                'jobs' => unserialize($result['jobs'])
            ];
        }


        return view('result', ['result' => $result_array[$code]]);
    }
}
