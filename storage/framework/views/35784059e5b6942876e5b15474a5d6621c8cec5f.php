<?php $__env->startSection('content'); ?>

<div class="content-body">
	<?php if(! empty ($searchText)): ?>
		<h3>Search Result for: <i style="padding-left: 10px;">"<?php echo e($searchText); ?>"</i></h3> 
	<?php endif; ?>
	    <hr>
	<?php $__empty_1 = true; foreach($resultQuestion as $quest): $__empty_1 = false; ?>
	    <li>
	    	<a href="<?php echo e(url('question', $quest->id)); ?>"> <?php echo e($quest->title); ?></a>
	    </li>
	    <hr>
	<?php endforeach; if ($__empty_1): ?>
	    <p>Sorry, We can't find any related question!</p>
	    <hr>
	<?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>