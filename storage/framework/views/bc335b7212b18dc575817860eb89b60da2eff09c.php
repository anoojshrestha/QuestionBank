<?php $__env->startSection('content'); ?>
	
	<?php
	/*read json file for category name*/
	    $path = 'categoryName/categoryName.json';
	    $categoryName = json_decode(file_get_contents($path), true);
	?>
	
<form action="http://localhost:8000/submitquestion" method="post"  class="askQ">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<label for="category">Category</label>
	<select name="category" class="inputText-margin">
		<option value="" disabled selected>In which Category does your question belong to?</option>
		<?php foreach($categoryName['Category'] as $cName): ?>
		<option value="<?php echo e($cName['Name']); ?>"><?php echo e($cName['Name']); ?></option>
		<?php endforeach; ?>
	</select>
	<label for="title">Title</label>
	<input class="inputText-margin" type="text" id="title" name="title" placeholder="What is the Title of your Question?">
	<label for="description">Description</label>
	<textarea id="description" name="description" placeholder="Please describe your Question briefly."></textarea>
	<label for="tags">Tags</label>
	<input class="inputText-margin" type="text" id="tags" name="tags" placeholder="Enter the Tags related to your Question. Min: 1">
	<input type="submit" id="submit" name="submit" value="Submit" class="submitButton">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>