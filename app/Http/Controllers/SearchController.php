<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;

class SearchController extends Controller
{
    public function showCategoryQuestion($categoryName){
    	$resultQuestion = Question::where('category',$categoryName)->get();
    	return view('questions.index')->with('resultQuestion', $resultQuestion);
    }

    public function showSearchResult(Request $request){
    	$search = $request->input('search');
    	$searchString = str_replace(['?','.',','], '', $search);
    	
    	// string $searchString to array $keywordArray
    	$keywordArray = array();
    	$keywordArray = explode(' ', strtolower($searchString));

    	$removeWords = array('a','the','is','am','are','and','i','you','what','how','where','who','when','to','?','.');
    	// remove some words from $keywords which are listed in the array $removeWords 
    	$keywords = array_diff($keywordArray, $removeWords); 
    	// $keywords = array_values(array_filter($keywords));
    	
    	// DB query to search the keywords
    	if(!empty($keywords)){
    		$questions = Question::select('*');
	    	foreach ($keywords as $key=>$value) {
	    		// if($key == 0){
	    		// 	$questions->where('title','like','%'.$value.'%');
	    		// }
	    		$questions->orWhere('title','like','%'.$value.'%');
	    	}
	    	$resultQuestion = $questions->get();	
    	}
    	else{
    		$resultQuestion = [];
    	}
    	

    	// return to the view with result
    	return view('questions.index')
    			->with('resultQuestion', $resultQuestion)
    			->with('searchText', $search);

    }
}
