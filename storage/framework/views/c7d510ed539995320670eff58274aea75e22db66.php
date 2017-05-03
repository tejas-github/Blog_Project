<?php $__env->startSection('title', "| $post->title"); ?>

<?php $__env->startSection('content'); ?>

<style>
	hr{
		border-color: black;
	}
</style>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<hr>
			
			<h1><?php echo e($post -> title); ?></h1>

			<hr>

			<p><?php echo e($post -> body); ?></p>

			<hr>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>