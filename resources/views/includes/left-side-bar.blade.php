<!-- left-side-bar start -->

	<?php
	/*read json file for category name*/
	    $path = 'categoryName/categoryName.json';
	    $categoryName = json_decode(file_get_contents($path), true);
	?>

<div class="category">
	<b><u>Category</u></b>
	<ul>
	@forelse($categoryName['Category'] as $cName)
		<li><a href="{{ url('category', $cName['Name']) }}">{{$cName['Name']}}</a></li>
	@empty
		Opps! No Catagory
	@endforelse
	</ul>
</div>

<!-- left-side-bar end -->