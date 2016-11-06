<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Question;

class AskQuestion extends Controller
{
    //
    public function showform() {
    	return view('forms.askquestion');
    }

    public function savequestion() {
    	$questionData = Request::all();
    	Question::create($questionData);
    	return redirect('saveprocess');
    }
}
