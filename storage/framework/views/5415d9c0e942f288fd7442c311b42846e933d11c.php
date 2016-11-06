<?php $__env->startSection('content'); ?>

<div class="content-body">

	<h1><?php echo e($question->title); ?></h1>
	<p><?php echo e($question->description); ?></p>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>