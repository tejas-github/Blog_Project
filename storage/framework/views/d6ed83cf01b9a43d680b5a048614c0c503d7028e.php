<?php $__env->startSection('title','| All Posts'); ?>

<?php $__env->startSection('content'); ?>

<style>
	hr {
		border-color: black;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<h1 align="center">All Posts</h1>
		<hr >
	</div>
</div><!-- End of row -->
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<th>#</th>
				<th style="text-align: center;">Title</th>
				<th style="text-align: center;">Body</th>
				<th style="text-align: center;">Created At</th>
				<th>*</th>
			</thead>

			<tbody>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
					<tr>
						<th><?php echo e($post -> id); ?></th>
						<td style="text-align: center;"><?php echo e($post -> title); ?></td>
						<td><?php echo e(substr($post -> body,0,50)); ?><?php echo e(strlen($post -> body) >50 ? "...": ""); ?></td>
						<td style="text-align: center;"><?php echo e(date('d-M-Y h:i A', strtotime($post -> created_at))); ?></td>
						<td style="text-align: center;"><a href="<?php echo e(route('posts.show', $post -> id)); ?>" class="btn btn-default btn-sm" target="_blank">View</a><a href="<?php echo e(route('posts.edit', $post -> id)); ?>" class="btn btn-default btn-sm" target="_blank">Edit</a></td>
					</tr>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>	
		<div class="text-center">
			<?php echo $posts -> links();; ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>