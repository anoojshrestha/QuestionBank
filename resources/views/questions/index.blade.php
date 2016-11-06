@extends ('main')

@section('content')

<div class="content-body">
	@if(! empty ($searchText))
		<h3>Search Result for: <i style="padding-left: 10px;">"{{ $searchText }}"</i></h3> 
	@endif
	    <hr>
	@forelse ($resultQuestion as $quest)
	    <li>
	    	<a href="{{ url('question', $quest->id) }}"> {{ $quest->title }}</a>
	    </li>
	    <hr>
	@empty
	    <p>Sorry, We can't find any related question!</p>
	    <hr>
	@endforelse

</div>

@stop