<?php $__env->startSection('title','| View Post'); ?>

<?php $__env->startSection('content'); ?>

<style>
	hr{
		border-color: black;
	}
</style>


<div class="row">
	<div class="col-md-8">

		<h1><?php echo e($post -> title); ?></h1>
		<p class="lead"><?php echo e($post -> body); ?></p>
	
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal" style="margin-left: -55px" >
				<dt>Url:</dt>
				<dd><a href=" <?php echo e(route('blog.single', $post -> slug)); ?> "><?php echo e(url('blog/'.$post -> slug)); ?></a>
				</dd>
			</dl>
			<dl class="dl-horizontal" style="margin-left: -55px" >
				<dt>Created At:</dt>
				<dd><?php echo e(date('d-M-Y &\nb\sp; h:i:s A',strtotime($post -> created_at))); ?>

				</dd>
			</dl>
			<br>
			<dl class="dl-horizontal" style="margin-left: -52px">
				<dt>Updated At:</dt>
				<dd><?php echo e(date('d-M-Y &\nb\sp; h:i:s A',strtotime($post -> updated_at))); ?>

				</dd>
			</dl>
			<hr>

			<div class="row">
				<div class="col-sm-6">
				<?php echo Html::linkRoute('posts.edit', 'Edit', array($post -> id), array('class' => 'btn btn-primary btn-block')); ?>

				</div>
				<div class="col-sm-6">
					<?php echo Form::open(array('route' => ['posts.destroy', $post -> id],'method' => 'DELETE')); ?>


					<?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-block']); ?>


					</div>

					<?php echo Form::close(); ?>

			</div>

			<div class="row">
						<div class="col-md-12">
						<?php echo Html::linkRoute('posts.index', '<<See all posts',[], array('class' => 'btn btn-default btn-h1-spacing btn-block')); ?>

						</div>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>