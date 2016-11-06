<!-- left-side-bar start -->

	<?php
	/*read json file for category name*/
	    $path = 'categoryName/categoryName.json';
	    $categoryName = json_decode(file_get_contents($path), true);
	?>

<div class="category">
	<b><u>Category</u></b>
	<ul>
	<?php $__empty_1 = true; foreach($categoryName['Category'] as $cName): $__empty_1 = false; ?>
		<li><a href="<?php echo e(url('category', $cName['Name'])); ?>"><?php echo e($cName['Name']); ?></a></li>
	<?php endforeach; if ($__empty_1): ?>
		Opps! No Catagory
	<?php endif; ?>
	</ul>
</div>

<!-- left-side-bar end -->