@extends ('main')

@section('content')

<div class="content-body">

	<h1>{{ $question->title }}</h1>
	<p>{{ $question->description }}</p>

</div>

@stop