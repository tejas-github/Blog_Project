<?php $__env->startSection('title','| Create New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

<?php echo Html::style('css/parsley.css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
	hr{
		border-color: black;
	}
</style>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		
		<?php echo Form::open(array('route' => 'posts.store','data-parsley-validate' => '')); ?>

		    
		    <?php echo e(Form::label('title','Title:')); ?>

		    
		    <?php echo e(Form::text('title',null,array('class' => 'form-control','required' => '','maxlength' => '255', 'placeholder' => 'Title goes here...'))); ?>


		    <?php echo e(Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])); ?>


		    <?php echo e(Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '5', 'placeholder' => 'Slug goes here...'))); ?>


		    <?php echo e(Form::label('body','Post Body:', ['class' => 'form-spacing-top'])); ?>

		    
		    <?php echo e(Form::textarea('body',null,array('class' => 'form-control', 'required' => '', 'placeholder' => 'Body/Contents of the Post goes here...'))); ?>

		   
		    <?php echo e(Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top:20px;'))); ?>

		
		<?php echo Form::close(); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php echo Html::script('js/parsley.min.js'); ?>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>