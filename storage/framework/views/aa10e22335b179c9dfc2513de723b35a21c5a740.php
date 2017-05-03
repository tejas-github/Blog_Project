<?php $__env->startSection('title', '| Register'); ?>

<?php $__env->startSection('content'); ?>
<style>
	Form{
	font-family:Tahoma; 
}
</style>


<div class="row">
	<div class="col-md-4 col-md-offset-4" >
	<div class="panel panel-primary" style="background-color: lightblue;">
		<div class="panel-heading" style="text-align: center; font-size:large; ">Register</div>
			<div class="panel-body">
				<?php echo Form::open(); ?>


					<?php echo e(Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Enter Your Name...', 'style' => 'margin-top:30px;'])); ?>


					<?php echo e(Form::email('email', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'example@xyz.com'])); ?>


					

					

					<?php echo e(Form::password('password', ['class' => 'form-control form-spacing-top
					', 'placeholder' => 'Set Your Password'])); ?>


					<?php echo e(Form::password('password_confirmation', ['class' => 'form-control form-spacing-top', 'placeholder' => 'Retype/Confirm Your Password'])); ?>


					
					
					<!--</div>-->

					<?php echo e(Form::submit('Register', ['class' => 'btn btn-info form-control form-spacing-top', 'style' => 'font-size:medium;font-weight:bold;'])); ?>


				<?php echo Form::close(); ?>	
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>