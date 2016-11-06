<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;

class QuestionController extends Controller
{
	public function showDetail($id) {
		$question = Question::findOrFail($id);
		return view('questions.details')->with('question', $question);
	}
}
