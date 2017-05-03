<?php $__env->startSection('title', '|Blog'); ?>

<?php $__env->startSection('content'); ?>

<style>
	hr{
		border-color: black;
	}
</style>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
			<hr />
		</div>
	</div>

	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo e($post -> title); ?></h2>
			
			<h5>Published: <?php echo e(date('d-M-Y &\nb\sp; h:i:s A',strtotime($post -> created_at))); ?></h5>
			
			<p><?php echo e(strlen($post -> body) >160 ? substr($post->body, 0,160) . "...": "$post->body"); ?></p>
			
			<a href="<?php echo e(route('blog.single', $post->slug)); ?>" class="btn btn-primary"> Read More </a>
			<hr />
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<?php echo $posts -> links(); ?>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>