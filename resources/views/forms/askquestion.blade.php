@extends ('main')

@section('content')
	
	<?php
	/*read json file for category name*/
	    $path = 'categoryName/categoryName.json';
	    $categoryName = json_decode(file_get_contents($path), true);
	?>
	
<form action="http://localhost:8000/submitquestion" method="post"  class="askQ">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label for="category">Category</label>
	<select name="category" class="inputText-margin">
		<option value="" disabled selected>In which Category does your question belong to?</option>
		@foreach($categoryName['Category'] as $cName)
		<option value="{{ $cName['Name'] }}">{{ $cName['Name'] }}</option>
		@endforeach
	</select>
	<label for="title">Title</label>
	<input class="inputText-margin" type="text" id="title" name="title" placeholder="What is the Title of your Question?">
	<label for="description">Description</label>
	<textarea id="description" name="description" placeholder="Please describe your Question briefly."></textarea>
	<label for="tags">Tags</label>
	<input class="inputText-margin" type="text" id="tags" name="tags" placeholder="Enter the Tags related to your Question. Min: 1">
	<input type="submit" id="submit" name="submit" value="Submit" class="submitButton">
</form>

@stop